<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/15/16
 * Time: 11:37 AM
 */

require_once "../app/core/DB.php";
require_once "../app/core/DBCriteria.php";
include('/var/www/html/mvc/app/controllers/smarty_app.php');

class Student extends Controller
{
    public $model_obj;
    public $smarty;

    public function __construct(){
        session_start();
        $this->model_obj= $this->model('StudentModel');
        $this->smarty= new Smarty_app;
    }


    public function login()
    {
        if((isset($_SESSION["no_remember"])) || (isset($_COOKIE['logged_in'])))
        {
            $this->smarty->render('index.tpl','admin');
        } else {
            $message ="";
            $this->smarty->addParams('message', $message);
            $this->smarty->render('login.tpl','admin');
        }
    }


    public function dashboard()
    {
        if((isset($_SESSION["no_remember"])) || (isset($_COOKIE['logged_in'])))
        {
            $this->smarty->render('index.tpl','admin');
            //$this->smarty->display('../app/views/admin/index.tpl');
        } else {
            $message ="";
            $this->smarty->addParams('message', $message);
            $this->smarty->render('login.tpl','admin');
            //$this->smarty->assign('message', $message);
            //$this->smarty->display('../app/views/admin/login.tpl');
        }
    }


    public function tables()
    {
        $data= $this->model_obj->select_all();
        $this->smarty->addParams('students', $data);
        $this->smarty->render('tables.tpl','admin');
        //$this->smarty->assign('students', $data);
        //$this->smarty->display('../app/views/admin/tables.tpl');
    }

    public function logout()
    {
        //session_start() ;
        setcookie('logged_in','',time()-3600, '/');
        session_destroy();
        //echo $_COOKIE['logged_in'];
        //exit(0);
        $message ="";
        $this->smarty->addParams('message', $message);
        $this->smarty->render('login.tpl','admin');
        //$this->smarty->assign('message', $message);
        //$this->smarty->display('../app/views/admin/login.tpl');
    }

    public function login_check()
    {
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $result= $this->model_obj->check_login($email,$password);

        if($result){
            if (isset($_REQUEST['remember'])) {

                $_SESSION["remember"] = $email;
                setcookie('logged_in', $email, time() + (86400 * 30), "/");
            }
            else{
                $_SESSION["no_remember"] = $email;
            }
            //$this->smarty->display('../app/views/admin/index.tpl');
            $this->smarty->render('index.tpl','admin');
        }
        else{
            $message ="login fail";
            //$this->smarty->assign('message', $message);
            //$this->smarty->display('../app/views/admin/login.tpl');
            $this->smarty->addParams('message', $message);
            $this->smarty->render('login.tpl','admin');

        }
    }


    //student record management
    public function index()
    {
        $data= $this->model_obj->select_all();
        //$this->smarty->assign('students', $data);
        //$this->smarty->display('../app/views/home/StudentPortal.tpl');
        $this->smarty->addParams('students', $data);
        $this->smarty->render('StudentPortal.tpl','admin');
    }
   

    public function add_student()
    {

        //$this->smarty->display('../app/views/admin/add_record.tpl');
        $this->smarty->render('add_record.tpl','admin');
    }

    public function edit_student($id)
    {
        $this->model_obj->id = $id;
        $data = $this->model_obj->get_student($this->model_obj);
        //$this->smarty->assign('student', $data);
        //$this->smarty->display('../app/views/admin/edit_record.tpl');
        $this->smarty->addParams('student', $data);
        $this->smarty->render('edit_record.tpl','admin');
    }

    public function save_student_record()
    {
        $this->model_obj->student_name = $_REQUEST["name"];
        $this->model_obj->dob = $_REQUEST["dob"];
        $this->model_obj->father_name = $_REQUEST["f_name"];
        $this->model_obj->class = $_REQUEST["class"];
        $this->model_obj->address = $_REQUEST["address"];
        $this->model_obj->ph_no = $_REQUEST["ph_no"];
        $this->model_obj->insert($this->model_obj);
        header('Location: http://localhost/mvc/public/student/tables');
    }

    public function update_student_record()
    {
        $this->model_obj->id = $_REQUEST["id"];
        $this->model_obj->student_name = $_REQUEST["name"];
        $this->model_obj->dob = $_REQUEST["dob"];
        $this->model_obj->father_name = $_REQUEST["f_name"];
        $this->model_obj->class = $_REQUEST["class"];
        $this->model_obj->address = $_REQUEST["address"];
        $this->model_obj->ph_no = $_REQUEST["ph_no"];
        $this->model_obj->update($this->model_obj);
        header('Location: http://localhost/mvc/public/student/tables');
    }

    public function delete_student_record($id)
    {
        $this->model_obj->id = $id;

        $this->model_obj->delete($this->model_obj);
        header('Location: http://localhost/mvc/public/student/tables');
    }

    public function export_record()
    {
        $this->model_obj->export();
    }

    public function import()
    {
        //$this->smarty->display('../app/views/admin/import_record.tpl');
        $this->smarty->render('import_record.tpl','admin');
    }

    public function import_record()
    {
        $handle = fopen($_FILES['filename']['tmp_name'], "r");
        $this->model_obj->import($handle);
        header('Location: http://localhost/mvc/public/student/tables');
    }
}