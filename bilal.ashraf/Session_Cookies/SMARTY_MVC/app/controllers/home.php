<?php

class Home extends Controller
{
    public function index($name='')
    {
        $user = $this->model('User');
        $user->name = $name;
        //echo $user->name;
        $this->view('home/index', ['name' => $user->name]);
    }

    public function test($param = '')
    {
        echo 'test23';
        echo "<br>" . $param[0] . "<br>" . $param[1];
    }
}
