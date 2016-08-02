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
        $this->user = $this->model('User');
    }

}