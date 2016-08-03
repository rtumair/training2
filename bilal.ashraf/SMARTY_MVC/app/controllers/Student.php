<?php
/**
 * Created by PhpStorm.
 * User: bilal_ashraf
 * Date: 7/27/16
 * Time: 1:28 AM
 */
require_once '../app/models/StudentModel.php';
require_once '../app/core/Db_Criteria.php';
require_once '../lib/smarty/Smarty.class.php';

class Student extends Controller
{
    public function index()
    {
        //echo 'StudentController' . "<br>";
    }

    public function DeleteStd($id)
    {
        $std_model = new StudentModel();
        $std_model->from('student');
        $std_model->where("id='$id'");
        $std_model->Delete();
        header('Location: http://localhost/bilal_workspace/SMARTY_MVC/public/Student/ListAllStudents');
        exit;
    }


    public function UpdateStd($id)
    {
        $std_model = new StudentModel();
        $data_arr1 = array(0=>'id',1=>'name', 2=>'fathername', 'dob', 'schoolname', 'city', 'destination', 'status');
        $data_sent = implode(",", $data_arr1);
        $std_model->select($data_sent, '');
        $std_model->from('student');
        $std_model->where("id='$id'");
        $result = $std_model->run_query();
        $res = mysqli_fetch_row($result);

        $smarty = new Smarty();
        $smarty->assign('name',$res[1]);
        $smarty->assign('fathername',$res[2]);
        $smarty->assign('dob',$res[3]);
        $smarty->assign('schoolname',$res[4]);
        $smarty->assign('city',$res[5]);
        $smarty->assign('destination',$res[6]);
        $smarty->assign('status',$res[7]);

        $smarty->assign('id', $id);
        $smarty->display('../app/views/home/Edit_Std.tpl');
      //  $this->viewEditStd('home/Edit_Std' ,$id ,$result);
    }

    public function Update_F()
    {
        $id = $_POST['id'];
        $data_arr1 = array(0=>'name' ,'fathername' ,'dob' ,'schoolname' ,'city' ,'destination' ,'status');
        $data_arr2 = [];
        $org_data_std = [];

        for($i=0,$j=0; $i < 7; $i++) {
            
            $org_data_std[$j] = $data_arr1[$i] . " = '" . $_POST[$data_arr1[$i]] . "'  ";
            $j++;
        }
        $std_model = new StudentModel();
        $send_arr = implode(',' ,$org_data_std);
        $std_model->from('student');
        $std_model->Select($send_arr);
        $std_model->where("id='$id'");
        $std_model->Update();
        header('Location: http://localhost/bilal_workspace/SMARTY_MVC/public/Student/ListAllStudents');
        exit;
    }
    
    public function AddStudent()
    {
        $user = $this->model('StudentModel');
        $this->viewAddStd('home/AddStudent');
    }

    public function ListAllStudents()
    {
       // echo "<br>List All Students";
        $std_model = new StudentModel();
        $data_arr1 = array(0=>'id', 1=>'name', 2=>'fathername', 'dob', 'schoolname', 'city', 'destination', 'status');
        $data_sent = implode(",", $data_arr1);

        $std_model->select($data_sent, '');
        $std_model->from('student');
        //$std_model->where('id=2');

        $result = $std_model->run_query();
        $smarty = new Smarty();
        $smarty->assign('result', $result);
        $smarty->display('../app/views/home/list_all_students.tpl');
        // $result = $std_model->select('student',$data_sent, 'id=11');
        //$this->viewListStd('home/list_all_students',$result);
        //require_once '../app/views/home/list_all_students.tpl';
        //$std_model->
    }





    public function AddStudent_I()
    {
        $data_arr1 = array(0=>'name', 1=>'fathername', 'dob', 'schoolname', 'city', 'destination', 'status');
        $data_arr2 = [];
        $org_data_std = [];

        for($i=0,$j=0; $i<7; $i++) {
            if($_POST[$data_arr1[$i]]) {
                $org_data_std[$j] = "'" . $_POST[$data_arr1[$i]] . "'";
            }
            else {
                $org_data_std[$j] = "'" . $_POST[$data_arr1[$i]] . "'";
            }
            ++$j;
        }
        $comma_separated = implode(",", $data_arr1);
        $std_data = implode(",", $org_data_std);

        $db_criteria_obj = new Db_Criteria();
        $db_criteria_obj->select($comma_separated);
        $db_criteria_obj->from('student');
        $db_criteria_obj->Add_Std($std_data);
        header('Location: http://localhost/bilal_workspace/SMARTY_MVC/public/Student/ListAllStudents');
        exit;

    }
    
}