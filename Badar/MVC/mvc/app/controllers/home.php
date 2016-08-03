<?php
/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/26/16
 * Time: 11:35 AM
 */

class Home extends Controller{

    
    public function index($name = ''){
        //echo 'entered index';
        
        $usr = $this->model('User');
        $usr->name=$name;

        $this->view('home/index',['name'=> $usr->name]);


    }


}