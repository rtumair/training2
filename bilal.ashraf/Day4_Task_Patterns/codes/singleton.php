<?php

class Singleton
{
    private static $instance;

    private function __Singleton()
    {
    }

    public static function getInstance()
    {
        if (static:: $instance == null) {
            static:: $instance = new Singleton();
        }
        return static:: $instance;
    }

    function sum()
    {
        echo "bilal";
    }
}

$obj = Singleton::getInstance();
$obj->sum();