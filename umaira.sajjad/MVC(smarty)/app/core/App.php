<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 2:07 PM
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

class App {
    
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    /**
     * App constructor.
     */
    public function __construct()
    {
        $url = $this->parseUrl();
        if (file_exists('../app/controllers/' . $url[0] .'.php'))
        {
            // check if controller exists
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        if (isset($url[1]))
        {
            if (method_exists($this->controller, $url[1] ))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

       // print_r($this->params);
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    /** explodes the url and gets constructor url parts.
     * @return array
     */
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
           // echo $_GET['url'];
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));

        }

    }
}