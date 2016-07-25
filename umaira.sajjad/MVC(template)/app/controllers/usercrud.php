<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/21/16
 * Time: 10:16 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Usercrud extends Controller
{
    protected $user;
    protected $smarty;

    public function __construct()
    {
        session_start();

        $this->user = $this->model('User');
      //   $this->smarty = new SmartyApp();

    }

    public function index()
    {
      //  echo 'Inside AddUser index Controller';

//
//        if(isset($_GET['adduser']))
//        {
//            echo 'Inside AddUser index Controller';
//
//            $smarty->display('../app/views/adduser.tpl');
//        }
//        else if(isset($_GET['updateuser']))
//        {
//            $smarty->assign('rowID', $_GET['rowID']);
//            $smarty->display('../app/views/updateuser.tpl' );
//        }


        $smarty = new Smarty();
        $smarty->assign('rowID', $_GET['rowID']);
        $smarty->display('../app/views/updateuser.tpl' );
    }
    public function adduser()
    {
        $smarty = new Smarty();
        $smarty->display('../app/views/adduser.tpl');

    }
    public function viewuser()
    {
        $smarty = new Smarty();
        $smarty -> assign('tabledata', $this->user->viewAll());
        $smarty->display('../app/views/viewusers.tpl');

    }

        public function logout()
    {
      session_destroy();
        header('Location: http://localhost/MVC/public');

    }

    public function login()
    {

        if(isset($_POST['login']))
       {
           $data_missing = array();

           if(empty($_POST['u_name'])){
               $data_missing[] = 'username';
           } else {
               $email = trim($_POST['u_name']);
           }
           if(empty($_POST['u_pass'])){
               $data_missing[] = 'password';
           } else {
               $u_pass = trim($_POST['u_pass']);
           }

           if(empty($data_missing))
           {
               $is_successful = $this->user->authenticate([
                   'email' => $email,
                   'password' => $u_pass
               ]);
               if ($is_successful)
               {

                   echo 'SESSIONSSS: '.  $_SESSION['login_user'];
                   header('Location: http://localhost/MVC/public');
               } else {
                   // print error
                   echo 'could not redirect';
               }

           } else {
               echo 'You need to enter the following data<br />';

               foreach($data_missing as $missing)
               {

                   echo "$missing<br />";

               }
           }


       }
    }
    
    public function add_a_user()
    {
        if(isset($_POST['submit']))
        { 
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


            if(empty($data_missing))
            {
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
    public function update_a_user($row_id) {
        echo 'CALL ME!!!';

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
        echo 'delete user'. $_GET['rowID'];
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