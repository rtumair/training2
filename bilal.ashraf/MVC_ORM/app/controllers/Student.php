<?php
/**
 * Created by PhpStorm.
 * User: bilal_ashraf
 * Date: 7/27/16
 * Time: 1:28 AM
 */
require_once '../app/models/StudentModel.php';
require_once '../app/core/Db_Criteria.php';

class Student extends Controller
{
    public function index()
    {
        //echo 'StudentController' . "<br>";
    }

    public function DeleteStd($id)
    {
        $std_model = new StudentModel();
        $std_model->Delete_Data('student' ,"id='$id'");
        header('Location: http://localhost/bilal_workspace/MVC_ORM/public/Student/ListAllStudents');
        exit;
    }


    public function UpdateStd($id)
    {
        $std_model = new StudentModel();
        $data_arr1 = array(0=>'id',1=>'name', 2=>'fathername', 'dob', 'schoolname', 'city', 'destination', 'status');
        $data_sent = implode(",", $data_arr1);
        $result = $std_model->select_where('student',$data_sent, "id='$id'");
        $this->viewEditStd('home/Edit_Std' ,$id ,$result);
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
        //echo $send_arr . "yariii<br>";
        $std_model->update_std_where('student' ,$send_arr , "id='$id'");
        header('Location: http://localhost/bilal_workspace/MVC_ORM/public/Student/ListAllStudents');
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
       // $std_model->where = 'id = 11';
        $result = $std_model->select('student',$data_sent);
        // $result = $std_model->select('student',$data_sent, 'id=11');
        $this->viewListStd('home/list_all_students',$result);
        //require_once '../app/views/home/list_all_students.php';
        //$std_model->
    }





    public function AddStudent_I()
    {
        //echo "<br>AddStudent<br>";
        $data_arr1 = array(0=>'name', 1=>'fathername', 'dob', 'schoolname', 'city', 'destination', 'status');
        $data_arr2 = [];
        $org_data_std = [];

        for($i=0,$j=0; $i<7; $i++) {

            if($_POST[$data_arr1[$i]]) {
                $data_arr2[$j] = $data_arr1[$i] ;
                $org_data_std[$j] = "'" . $_POST[$data_arr1[$i]] . "'";
                ++$j;
            }

        }
        //$std_model = new StudentModel();
       // echo $std_model->name;

        $comma_separated = implode(",", $data_arr2);
        $std_data = implode(",", $org_data_std);

        $db_criteria_obj = new Db_Criteria();
        $db_criteria_obj->Add_Std($std_data, 'student',$comma_separated);
       // $this->ListAllStudents();
       // echo "bilal<br>";
        header('Location: http://localhost/bilal_workspace/MVC_ORM/public/Student/ListAllStudents');
        exit;

    }
    
}