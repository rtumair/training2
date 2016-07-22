<?php
/**
 * Created by PhpStorm.
 * User: muhammad.badar
 * Date: 7/22/16
 * Time: 2:50 PM
 */
namespace DesignPatterns\Creational\Multiton;
/**
 * class Singleton.
 */
class Multiton
{

    private static $instances=array();
    /**
     * gets the instance via lazy initialization (created on first usage).
     *
     * @return self
     */
    public static function getInstance($instanceName)
    {
        if (!array_key_exists($instanceName,self::$instances)) {
            echo"I am born."."<br>";
            self::$instances[$instanceName] = new self();
        }

        echo  "<br>"." I am returned as"."<br>";
        return self::$instances[$instanceName] = new self();
    }
    /**
     * is not allowed to call from outside: private!
     */
    private function __construct()
    {
    }
    /**
     * prevent the instance from being cloned
     *
     * @return void
     */
    final public function __clone()
    {

    }
    /*
     *
     * @return void
     */
    final public function __wakeup()
    {

    }
}
echo"1st instance creation"."<br>";
$ojb = Multiton::getInstance('Badar');

var_dump($ojb);
echo "<br>";


echo"<br>"."2nd instance creation"."<br>";
$obj = Multiton::getInstance('Muhammad');

var_dump($obj);
echo "<br>";

echo"<br>"."3rd instance creation"."<br>";
$obj1 = Multiton::getInstance('Badar');
var_dump($obj1);
echo "<br>";

echo"<br>"."4th instance creation"."<br>";
$obj2 = Multiton::getInstance('Awais');
var_dump($obj2);
echo "<br>";

echo"<br>"."5th instance creation"."<br>";
$obj2 = Multiton::getInstance('Muhammad');
var_dump($obj2);
echo "<br>";



