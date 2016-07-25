<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 2:13 PM
 */

class Home extends Controller 
{
    protected $user;
    protected $smarty;

    public function __construct()
    {
        $this->user = $this->model('User');
        $this -> smarty = new SmartyApp();
    }
    /**
     * default method being called for the default controller
     * @param string $name
     */
    public function index()
    {
        session_start();

        if (empty($_SESSION['login_user'])) {
            $this->smarty->render('login','home');
        } else {
            $this->smarty->render('index','home');
        }
    }


}