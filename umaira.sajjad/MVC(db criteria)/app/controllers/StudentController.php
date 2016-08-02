<?php

/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 8/1/16
 * Time: 1:02 PM
 */
class StudentController extends Controller
{

    protected $student;

    public function __construct()
    {

        parent::__construct();
        session_start();
        $this->user = $this->model('Student');
    }
}