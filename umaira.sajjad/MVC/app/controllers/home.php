<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 2:13 PM
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Home extends Controller 
{
    protected $user;
    public function __construct()
    {
        $this->user = $this->model('User');
    }
    /**
     * default method being called for the default controller
     * @param string $name
     */
    public function index()
    {
       $table_data = $this->user->viewAll();
       $this -> view('home/index', $table_data);
    }


}