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
    protected $smarty;

    public function __construct()
    {
        session_start();

        $this->user = $this->model('User');
        $this->smarty = new SmartyApp();

    }


    public function viewuser()
    {
        $this-> smarty -> addParams('tabledata', $this->user->ViewAll());
        $this->smarty->render('viewusers','usercrud');

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
                   'user_email' => $email,
                   'password' => $u_pass
               ]);
               if (!empty($is_successful))
               {
                   header('Location: http://localhost/MVC/public');
               } else {
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
    public function adduser_helper()
    {
        $this->smarty->render( 'adduser','usercrud');

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
                $is_successful =  $this->user-> Create([
                    'user_name' => $u_name,
                    'password' => $u_pass,
                    'user_email' => $email
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
        // echo 'CALL ME!!!';

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
    
                $is_successful = $this->user->Update( $row_id ,[
                    'user_name' => $u_name,
                    'password' => $u_pass,
                    'user_email' => $email
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
    
                $this->alert_dialog('Missing Fields');
    
                foreach($data_missing as $missing){
    
                    echo "$missing<br />";
    
                }
    
            }
    
        }
    }

    public function updateuser_helper()
    {
        $this->smarty->addParams('rowID', $_GET['rowID']);
        $this->smarty->render('updateuser','usercrud');
    }

    public function delete_a_user()
    {
       //  echo 'delete user'. $_GET['rowID'];
        $is_successful = $this->user->Delete($_GET['rowID']);
        if ($is_successful)        {
            header('Location: http://localhost/MVC/public');
        } else {
            // print error
            echo 'could not redirect';
        }
    }

    public function alert_dialog($message)
    {
        echo '<script language="javascript">';
        echo 'alert("'.$message.'")';
        echo '</script>';
    }
}