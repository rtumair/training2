<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 2:10 PM
 */
class Controller
{
    public $viewManager;
    
    public function __construct()
    {
       $this->viewManager = new ViewManager();

    }
    public function model($model)
    {
        $model = $model.'Model';
        require_once '../app/models/'. $model.'.php';
        return new $model();
    }
    public function view($view, $data = [])
    {
        require_once '../app/views/' .$view.'.php';
    }


    public function viewuser()
    {
        $this-> viewManager -> addParams('tabledata', $this->user->ViewAll());
        $this-> viewManager->render('/User/view','User');
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

    public function add_helper()
    {
        $this->viewManager->render( '/User/add','User');

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
                $is_successful =  $this->user-> Create([
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

                $is_successful = $this->user->Update( $row_id ,[
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

                $this->alert_dialog('Missing Fields');

                foreach($data_missing as $missing){

                    echo "$missing<br />";

                }

            }

        }
    }

    public function update_helper()
    {
        $this->viewManager->addParams('rowID', $_GET['rowID']);
        $this->viewManager->render('/User/update','User');
    }

    public function delete()
    {
        //  echo 'delete User'. $_GET['rowID'];
        $is_successful = $this->user->Delete($_GET['rowID']);
        if ($is_successful)        {
            header('Location: http://localhost/MVC/public');
        } else {
            // print error
            echo 'could not redirect';
        }
    }
}