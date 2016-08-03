<?php
/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/26/16
 * Time: 11:03 AM
 */

class Controller {

    public function model($model){

        require_once '../app/models/' .$model. '.php';

        return new $model;

    }

    public function view($view , $data=[]){

        require_once '../app/views/' .$view. '.php';

        return new $view;


    }
}