<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 2:13 PM
 */

class homeController extends Controller
{
    protected $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = $this->model('User');
    }
    /**
     * default method being called for the default controller
     * @param string $name
     */
    public function index()
    {
        session_start();
        //echo 'sessions: ' . ($_SESSION['login_user']);
        if (empty($_SESSION['login_user'])) {
            $this -> viewManager ->render('login','home');
        } else {
            $this -> viewManager ->render('index','home');
        }
    }


}