<?php
/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/26/16
 * Time: 11:35 AM
 */
include('../lib/smarty/Smarty.class.php');
require_once '../app/models/Student.php';
//ini_set("display_errors", true);

//require_once '../views/home/index.tpl';

class Home extends Controller{

public function login(){

    $username=$_POST["user_name"];
    $pass=$_POST["password"];

   // echo '<br>controller val '.$username;
   // echo '<br>controller val '.$pass;

    $smarty = new Smarty;
    $obj = new Student();

    $res = $obj->checkLogin($username,$pass);

    if($res){

        $smarty->display('/var/www/html/MVC/mvc/app/views/home/students.tpl');
    }

    else {
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/index.tpl');
    }


}
    
    public function index($name =''){
        //echo 'entered index';
       $smarty = new Smarty;
        //print_r($smarty);
        //exit(0);

        //$usr = $this->model('User');
        //$usr->name=$name;

      // $this->view('home/index',['name'=> $usr->name]);

        $smarty->display('/var/www/html/MVC/mvc/app/views/home/index.tpl');


    }

    public function students(){

        //$this->view('home/students');

        $smarty = new Smarty();
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/students.tpl');
        //$smarty->assign('myvar','students.tpl');
    }

    public function Add(){

        //$this->view('home/AddStudent');

        $smarty = new Smarty();
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/AddStudent.tpl');

    }

    public function allStu(){

       // require_once '../app/models/Student.php';

       // $this->view('home/ListPage');


        $obj = new Student();

        $result = $obj->ListStu();

        //echo'trying ';

        //$this->view('home/ListPage', $result);
        //$data = 'badar';

        $smarty = new Smarty();
        $smarty->assign('data',$result);
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/ListPage.tpl');


        }

    public function SelectOne(){

        $id = $_POST["SlctoneTxt"];
        $obj = new Student();
        $result = $obj->search($id);


       // $this->view('home/ListPage',$result);

        $smarty = new Smarty();
        $smarty->assign('data',$result);
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/ListPage.tpl');

    }

    public function SelectPK(){

        $id = $_POST["SlctPkTxt"];
        $obj = new Student();
        $result = $obj->search($id);


        //$this->view('home/ListPage',$result);

        $smarty = new Smarty();
        $smarty->assign('data',$result);
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/ListPage.tpl');
    }

    public function Delete(){

        $id = $_POST["del12"];
        $obj = new Student();
        $obj->Delete($id);

        $result = $this->allStu();

       // $this->view('home/ListPage',$result);
        $smarty = new Smarty();
        $smarty->assign('data',$result);
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/ListPage.tpl');



    }


    public function DeletebyPK(){

        $id = $_POST["DeletePkTxt"];
     //   echo $id;
        $obj = new Student();
        $obj->Delete($id);

        $result = $this->allStu();

       // $this->view('home/ListPage',$result);

        $smarty = new Smarty();
        $smarty->assign('data',$result);
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/ListPage.tpl');
    }

    public function studentadd(){

        $newStu = new Student();

        $newStu->Name=$_POST['name'];
        $newStu->F_Name = $_POST['fathername'];
        $newStu->DOB=$_POST['dob'];
        $newStu->School=$_POST['schoolname'];
        $newStu->City=$City=$_POST['city'];
        $newStu->Disc=$_POST['description'];


        //$newStu->$F_Name=$_POST['fathername'];
       // $newStu-> $DOB=$_POST['dob'];
       // $newStu-> $School=$_POST['schoolname'];
       // $newStu-> $City=$_POST['city'];
       // $newStu->$Disc=$_POST['description'];
        //$School=$_POST['name'];

        $obj = new Student();
        $obj->AddStu($newStu);

        $result=$obj->ListStu();

        //$this->view('home/ListPage',$result);

        $smarty = new Smarty();
        $smarty->assign('data',$result);
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/ListPage.tpl');

    }


    public function EditStu(){
        Global $uid,$name,$Fname,$dob,$school,$city,$desc,$obj;

        $obj = new Student();

       // echo $_POST["edit12"];
       // echo "entered edit stu";

        $result = $obj->search($_POST["edit12"]);


        //echo 'entered edit stu controller';

        //echo $uid;

        //echo $_POST["edit12"];

        //$result = $obj->search($uid);

       // var_dump($result);
        //echo $result;

       // echo 'testing1';
       //    var_dump($result);
       // echo $_POST["edit12"];

        while ($row = $result->fetch_assoc()) {

            $uid=$row["id"];
            $name= $row["name"];
            $Fname = $row["fathers_name"];
            $dob =  $row ["dob"];
            $school =  $row ["School"];
            $city =  $row ["City"];
            $desc =  $row ["Description"];

        }

        if(!empty($_POST["e_name"])){

            $name = $_POST["e_name"];
            //echo $name;
        }
        if(!empty($_POST["e_fathername"])){
            $Fname = $_POST["e_fathername"];
        }
        if(!empty($_POST["e_dob"])) {
            $dob = $_POST["e_dob"];
        }
        if(!empty($_POST["e_schoolname"])) {
            $school = $_POST["e_schoolname"];
        }

        if(!empty($_POST["e_city"])) {
            $city = $_POST["e_city"];
        }

        if(!empty($_POST["e_description"])) {
            $desc = $_POST["e_description"];
        }
       // echo 'testing2';

        $obj->Name=$name;
        $obj->F_Name=$Fname;
        $obj->DOB = $dob;
        $obj->School = $school;
        $obj->City = $city;
        $obj->Disc= $desc;

       // echo 'testing';

      //  echo $uid;
        $result = new Student();
        $result->Edit($obj,$uid);
        
        $rv = $result->ListStu();

        //$this->view('home/ListPage',$rv);

        $smarty = new Smarty();
        $smarty->assign('data',$rv);
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/ListPage.tpl');

    }
    
    
    public function Edit(){

       // echo 'in edit controller';

        $obj = new Student();
        $id= $_POST["edit12"];

        $result = $obj->search($id);
        //var_dump($result);


        //var_dump($result);

        //$this->view('home/Editpage',$result);

        $smarty = new Smarty();
        $smarty->assign('data',$result);
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/Editpage.tpl');




    }

    public function AddStudents(){
        $smarty = new Smarty;
        $smarty->display('/var/www/html/MVC/mvc/app/views/home/AddStudent.tpl');
    }

    
    public function ViewOne(){

        $smarty = new Smarty();

        $smarty->display('/var/www/html/MVC/mvc/app/views/home/ViewOne.tpl');
        
    }

    public function ViewPK(){

        $smarty = new Smarty();

        $smarty->display('/var/www/html/MVC/mvc/app/views/home/ViewByPK.tpl');

    }

    public function DeletePK(){

        $smarty = new Smarty();

        $smarty->display('/var/www/html/MVC/mvc/app/views/home/DeleteBYPK.tpl');

    }

    
}