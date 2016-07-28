<?php
/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/26/16
 * Time: 11:35 AM
 */

require_once '../app/models/Student.php';

class Home extends Controller{

    
    public function index($name =''){
        //echo 'entered index';
        
        $usr = $this->model('User');
        $usr->name=$name;

        $this->view('home/index',['name'=> $usr->name]);


    }

    public function students(){

        $this->view('home/students');
    }

    public function Add(){

        $this->view('home/AddStudent');
    }

    public function allStu(){

       // require_once '../app/models/Student.php';

       // $this->view('home/ListPage');


        $obj = new Student();

        $result = $obj->ListStu();

        //echo'trying ';

        $this->view('home/ListPage', $result);

        }

    public function SelectOne(){

        $id = $_POST["SlctoneTxt"];
        $obj = new Student();
        $result = $obj->search($id);


        $this->view('home/ListPage',$result);
    }

    public function SelectPK(){

        $id = $_POST["SlctPkTxt"];
        $obj = new Student();
        $result = $obj->search($id);


        $this->view('home/ListPage',$result);
    }

    public function Delete(){

        $id = $_POST["del12"];
        $obj = new Student();
        $obj->Delete($id);

        $result = $this->allStu();

        $this->view('home/ListPage',$result);
    }


    public function DeletebyPK(){

        $id = $_POST["DeletePkTxt"];
     //   echo $id;
        $obj = new Student();
        $obj->Delete($id);

        $result = $this->allStu();

        $this->view('home/ListPage',$result);
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

        $this->view('home/ListPage',$result);

    }


    public function EditStu(){
        Global $uid,$name,$Fname,$dob,$school,$city,$desc,$obj;

        $obj = new Student();

       // echo $_POST["edit12"];

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
        $this->view('home/ListPage',$rv);

    }
    
    
    public function Edit(){

       // echo 'in edit controller';

        $obj = new Student();
        $id= $_POST["edit12"];

        $result = $obj->search($id);
        //var_dump($result);


        //var_dump($result);

        $this->view('home/Editpage',$result);
    
    }

}