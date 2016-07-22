<?php
class Logger
{
    private static $instances = array();

    public static function getInstance($key)
    {
        if(!array_key_exists($key, self::$instances)) {
            self::$instances[$key] = new self();
        }

        return self::$instances[$key];
    }

    public function display()
    {

        echo "Do file work";
    }

    // prevent creating multiple instances due to "private" constructor
    private function __construct(){}

    // prevent the instance from being cloned
    private function __clone(){}

    // prevent from being unserialized
    private function __wakeup(){}
}

$firstInstance = Logger::getInstance('file');
$secondInstance = Logger::getInstance('email');
echo 1 or die;
$firstInstance->display();
