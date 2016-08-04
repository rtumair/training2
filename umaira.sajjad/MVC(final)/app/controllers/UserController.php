<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/21/16
 * Time: 10:16 AM
 */

class UserController extends Controller
{
    protected $user;

    public function __construct()
    {
        parent::__construct();
        session_start();
        $this-> user = $this->model('User');
        $this -> controller_name = 'User';
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
                $is_successful = $this->user-> authenticate([
                    'user_email' => $email,
                    'password' => $u_pass
                ]);
                if (!empty($is_successful))
                {
                    session_start();
                    $_SESSION['login_user'] = $email;
                    if (isset($_POST['remember']))
                    {
                        setcookie('login_user', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
                    }
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

    public function add()
    {
        if(isset($_POST['submit']))
        {
            $data_missing = array();

            if(empty($_POST['u_name'])){
                $data_missing[] = 'username';
            } else {
                $u_name = trim($_POST['u_name']);
            }
            if(empty($_POST['u_city'])){
                $data_missing[] = 'city';
            } else {
                $city = trim($_POST['u_city']);
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
                $is_successful =  $this-> user -> Create([
                    'user_name' => $u_name,
                    'user_city' => $city,
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

    public function update($row_id) {
        // echo 'CALL ME!!!';

        if(isset($_POST['submit'])){

            $data_missing = array();

            if(empty($_POST['u_name'])){
                $data_missing[] = 'username';
            } else {
                $u_name = trim($_POST['u_name']);
            }
            if(empty($_POST['u_city'])){
                $data_missing[] = 'city';
            } else {
                $u_city = trim($_POST['u_city']);
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

                $is_successful = $this-> user->Update( $row_id ,[
                    'user_name' => $u_name,
                    'user_city' => $u_city,
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

                echo 'Missing Fields';

                foreach($data_missing as $missing){

                    echo "$missing<br />";

                }

            }

        }
    }

    public function delete()
    {
        //  echo 'delete User'. $_GET['rowID'];
        $is_successful = $this-> user-> Delete($_GET['rowID']);
        if ($is_successful)        {
            header('Location: http://localhost/MVC/public');
        } else {
            // print error
            echo 'could not redirect';
        }
    }


    public function import()
    {
        echo 'here';
        $is_successful = $this-> user-> Import();
        if ($is_successful)        {
            header('Location: http://localhost/MVC/public');
        } else {
            // print error
            echo 'could not redirect';
        }   

    }

    public function export()
    {
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=user.csv');

        $data = $this -> user -> Read();

        $output = "user_id, user_name, user_city, password, user_email\n";

        foreach ($data as $rs) {
            // add new row
            $output .= $rs['user_id'].",".$rs['user_name'].",".$rs['user_city'].",".$rs['password'].",".$rs['user_email']."\n";
        }
        echo $output;
        exit;
    }




}