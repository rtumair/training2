<?php

/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/15/16
 * Time: 2:30 PM
 */
class Contact extends Controller
{
    public function index()
    {
        echo "I am in Contact Index method";
    }
    
    public function phone($name, $othername)
    {
        echo "I am in Phone method with parameter ". $name . "& ".$othername;
    }

}