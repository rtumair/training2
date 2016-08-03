<?php
/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/26/16
 * Time: 11:00 AM
 */

class App{

    protected $controller ='home';
    protected $method = 'index';

    protected $params=[];


    public function __construct()
    {
        $url=$this->parseURL();

        //print_r($url);

        //echo 'check if file exists';

        if(file_exists('../app/controllers/'.$url[0].'.php')){
          //  echo 'file exists';

            $this->controller=$url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/'. $this->controller.'.php';

        //echo $this->controller;

        $this->controller = new $this->controller;
       // var_dump($this->controller);

        if(isset($url[1])) {

            if (method_exists($this->controller, $url[1])) {

                $this->method = $url[1];
                unset($url[1]);

            }
        }
        //print_r($url);

        $this->params =$url?array_values($url):[];

        //print_r($this->params);

        call_user_func_array([$this->controller,$this->method],$this->params);


    }


    public function parseURL(){

        if(isset($_GET['url'])){

            return $url = explode('/',filter_var(rtrim($_GET['url'] , '/'), FILTER_SANITIZE_URL));
        }
    }
}