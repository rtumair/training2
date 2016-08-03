<?php
/**
 * Created by PhpStorm.
 * User: bilal_ashraf
 * Date: 7/26/16
 * Time: 2:02 AM
 */
class App
{
    protected $controller = 'Admin';

    protected $method = 'index';

    protected $params = [];


    public function __construct()
    {
        $url=$this->parseURL();

            //print_r($url );
           // echo "<br>";
            //echo 'check if file exists';

        if(file_exists('../app/controllers/'.$url[0].'.php')){
            // echo 'file exists';

            $this->controller=$url[0];
            unset($url[0]);
        }
        //echo $this->controller . "<br>";
        require_once '../app/controllers/'. $this->controller.'.php';

          //  echo $this->controller;

        //print_r( $this->controller);
        //echo "<br>";

        $this->controller = new $this->controller;
       // print_r ($this->controller);
       // echo "<br>";

        if(isset($url[1])) {

            if (method_exists($this->controller, $url[1])) {

                $this->method = $url[1];
                unset($url[1]);

            }
        }
       // echo $this->method;
        //print_r($url);
        $this->params =$url?array_values($url):[];
        //print_r($this->params);
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    public function parseUrl()
    {
       if(isset($_GET['url']) != null) {

           //echo $_GET['url'];
           return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
       }
    }
}