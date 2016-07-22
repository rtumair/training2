<?php
/**
 * Created by PhpStorm.
 * Home: hassan.anwar
 * Date: 7/15/16
 * Time: 10:26 AM
 */

class App
{
    protected $controller='Home';
    protected $method='index';
    protected $params=array();


    public function __construct()
    {
        $url=$this->parseUrl();

        if(file_exists('../app/controllers/'. ucfirst($url[0]) . '.php'))
        {
            $this->controller=ucfirst($url[0]);
            unset($url[0]);
        }

        require_once '../app/controllers/'.$this->controller.'.php';

        //Creating new controller which creates object of Controller Class
        $this->controller=new $this->controller;

        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method=$url[1];
                unset($url[1]);
            }

        }


        //For passing prameters
        $this->params= $url ? array_values($url) : [];
  
        call_user_func_array([$this->controller, $this->method], $this->params);


    }

    public function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return $url=explode('/', filter_var(rtrim($_GET['url']), FILTER_SANITIZE_URL));
        }
    }

}