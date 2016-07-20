<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/15/16
 * Time: 11:37 AM
 */

require_once "../app/core/DB.php";
require_once "../app/core/DBCriteria.php";

class Home extends Controller
{
    public $model_obj;

    public function __construct(){
        $this->model_obj= $this->model('Student');
    }

    public function index($name = '')
    {
        $this->view('home/index',['name'=> 'ali']);
    }

    public function create($username='',$email='',$password='')
    {
        $this->model_obj->name=$username;
        $this->model_obj->email=$email;
        $this->model_obj->pass=$password;

        $this->model_obj->insert($this->model_obj);

    }

    public function delete($email='',$password='')
    {
        $this->model_obj->email=$email;
        $this->model_obj->pass=$password;
        $this->model_obj->delete($this->model_obj);

    }

    public function update($username='',$email='',$password='')
    {
        $this->model_obj->name=$username;
        $this->model_obj->email=$email;
        $this->model_obj->pass=$password;
        $this->model_obj->update($this->model_obj);
    }

    public function select_all()
    {
        $this->model_obj->select_all();
    }

}