<?php
/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/22/16
 * Time: 2:35 PM
 */
namespace DesignPatterns\Creational\Singleton;
/**
 * class Singleton.
 */
class Singleton
{
    /**
     * @var Singleton reference to singleton instance
     */
    private static $instance;
    /**
     * gets the instance via lazy initialization (created on first usage).
     *
     * @return self
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            echo"I am born."."<br>";
            static::$instance = new static();
        }

        echo  "<br>"." I am returned as"."<br>";
        return static::$instance;
    }
    /**
     * is not allowed to call from outside: private!
     */
    private function __construct()
    {
    }
    /**
     * prevent the instance from being cloned.
     *
     * @throws SingletonPatternViolationException
     *
     * @return void
     */
    final public function __clone()
    {
        //throw new SingletonPatternViolationException('This is a Singleton. Clone is forbidden');
    }
    /**
     * prevent from being unserialized.
     *
     * @throws SingletonPatternViolationException
     *
     * @return void
     */
    final public function __wakeup()
    {
        // throw new SingletonPatternViolationException('This is a Singleton. __wakeup usage is forbidden');
    }
}

$ojb = Singleton::getInstance();

var_dump($ojb)."<br>";

$obj = Singleton::getInstance();

var_dump($obj)."<br>";
