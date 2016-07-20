<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/15/16
 * Time: 11:37 AM
 */

require_once "../app/core/DB.php";
require_once "../app/core/DBCriteria.php";
include('../lib/smarty/Smarty.class.php');

class Student extends Controller
{
    public $model_obj;
    public $smarty;

    public function __construct(){
        //echo 1 or die();
        $this->model_obj= $this->model('StudentModel');
        $this->smarty= new Smarty;
    }

    public function index()
    {
        $data= $this->model_obj->select_all();

        $this->smarty->assign('students', $data);
        $this->smarty->display('../app/views/home/StudentPortal.tpl');
        //this->view('home/index',['students'=>$data]);
    }
    public $id;
    public $student_name;
    public $dob;
    public $father_name;
    public $class;
    public $address;
    public $ph_no;
    public $created_on;
    public $updated_on;
    public $status;


    public function add_student()
    {
        $this->smarty->display('../app/views/home/add_student.tpl');
    }

    public function edit_student($id)
    {
        $this->model_obj->id = $id;
        $data = $this->model_obj->get_student($this->model_obj);
        $this->smarty->assign('student', $data);
        $this->smarty->display('../app/views/home/edit_student.tpl');
        //$this->view('home/edit_student',['std'=>$data]);
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
        header('Location: http://localhost/mvc/public/student/');
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
        header('Location: http://localhost/mvc/public/student/');
    }

    public function delete_student_record($id)
    {
        $this->model_obj->id = $id;

        $this->model_obj->delete($this->model_obj);
        header('Location: http://localhost/mvc/public/student/');
    }

    public function export_record()
    {
        $this->model_obj->export();
    }

    public function import_record()
    {
        $handle = fopen($_FILES['filename']['tmp_name'], "r");

        $this->model_obj->import($handle);
        header('Location: http://localhost/mvc/public/student/');
    }
}