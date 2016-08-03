<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 2:13 PM
 */

class homeController extends Controller
{
    //protected $user;

    public function __construct()
    {
        parent::__construct();
//        $this->user = $this->model('User');
    }
    /**
     * default method being called for the default controller
     * @param string $name
     */
    public function index()
    {
        session_start();

        if (empty($_SESSION['login_user'])) {
            
            if (!empty($_COOKIE['login_user']))
            {
                $_SESSION['login_user'] = $_COOKIE['login_user'];
                $this -> viewManager ->render('index','home');
            } else
            {
                $this -> viewManager ->render('login','home');
            }
        } else
        {
            $this -> viewManager ->render('index','home');
        }
    }


}