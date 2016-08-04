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
    public $controller_name;
    public $model;
    
    public function __construct()
    {
       $this->viewManager = new ViewManager();        
    }

    public function model($model)
    {
        require_once ("../app/models/". $model . 'Model.php');
        $model = $model . 'Model';
        $this->model = new $model;
        return $this->model;
    }

    public function view($view)
    {
        require_once '../app/views/' .$view.'.php';
    }


    public function viewuser()
    {
        $this-> viewManager -> addParams('tabledata', $this-> model-> Read());
        $this-> viewManager->render('/'.$this->controller_name.'/view', $this-> controller_name);
    }

    public function logout()
    {
        session_destroy();

        setcookie('login_user','',time()-3600, '/');

        header('Location: http://localhost/MVC/public');
    }
       
    public function add_helper()
    {
        $this->viewManager->render('/'.$this->controller_name.'/add', $this-> controller_name);
    }   
    

    public function update_helper()
    {
        $this->viewManager->addParams('rowID', $_GET['rowID']);
        $this->viewManager->render('/'.$this->controller_name.'/update', $this-> controller_name);
    }

   
}