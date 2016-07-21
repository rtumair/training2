<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/21/16
 * Time: 10:16 AM
 */
class Usercrud extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = $this->model('User');
    }

    public function index() {
        // echo 'Inside AddUser index Controller';
        // $user = $this-> model('User');
        if(isset($_POST['add'])) {
            $this->view('adduser');
        } else if(isset($_GET['update'])){
            $this->view('updateuser', ['rowID'=> $_GET['rowID']]);
        }
    }
    public function add_a_user() {
        if(isset($_POST['submit'])){

            $data_missing = array();

            if(empty($_POST['u_name'])){
                $data_missing[] = 'username';
            } else {
                $u_name = trim($_POST['u_name']);
            }
            if(empty($_POST['email'])){
                $data_missing[] = 'Email';
            } else {
                $email = trim($_POST['email']);
            }

            if(empty($_POST['u_pass'])){
                $data_missing[] = 'password';
            } else {
                $u_pass = trim($_POST['u_pass']);
            }


            if(empty($data_missing)){

                $is_successful = $this->user->create([
                    'username' => $u_name,
                    'password' => $u_pass,
                    'email' => $email
                ]);
                if ($is_successful)
                {
                    // redirect to index view and print Student added;
                    header('Location: http://localhost/MVC/public');
                } else {
                    // print error
                    echo 'could not redirect';
                }

            } else {

                echo 'You need to enter the following data<br />';

                foreach($data_missing as $missing){

                    echo "$missing<br />";

                }

            }

        }
    }
    public function update_a_user($row_id ) {
        if(isset($_POST['submit'])){
    
            $data_missing = array();
    
            if(empty($_POST['u_name'])){
                $data_missing[] = 'username';
            } else {
                $u_name = trim($_POST['u_name']);
            }
            if(empty($_POST['email'])){
                $data_missing[] = 'Email';
            } else {
                $email = trim($_POST['email']);
            }
    
            if(empty($_POST['u_pass'])){
                $data_missing[] = 'password';
            } else {
                $u_pass = trim($_POST['u_pass']);
            }
    
            if(empty($data_missing)){
    
                $is_successful = $this->user->update( $row_id ,[
                    'username' => $u_name,
                    'password' => $u_pass,
                    'email' => $email
                ]);
                if ($is_successful)
                {
                    // redirect to index view and print Student added;
                    header('Location: http://localhost/MVC/public');
                } else {
                    // print error
                    echo 'could not redirect';
                }
    
            } else {
    
                echo 'You need to enter the following data<br />';
    
                foreach($data_missing as $missing){
    
                    echo "$missing<br />";
    
                }
    
            }
    
        }
    }
    public function delete_a_user() {
        $is_successful = $this->user->delete($_GET['rowID']);
        if ($is_successful)        {
            // redirect to index view and print Student added;
            header('Location: http://localhost/MVC/public');
        } else {
            // print error
            echo 'could not redirect';
        }
    }
}