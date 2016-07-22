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

        $smarty = new Smarty();
       //  var_dump($table_data);
       //  $smarty->assign('tabledata', $table_data);
        // if user not logged in then open login page else open index table
        session_start();

        if (empty($_SESSION['login_user'])) {
            $smarty->display('../app/views/home/login.tpl' );
        } else {
//            echo 'XXXXXXXX';
            $smarty->display('../app/views/home/index.tpl' );
        }
    }


}