<?php
class MyClass
{
    const CONST_VALUE = 'A constant value';
    static $my_static = 'B';
}

class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "<br>";
        echo parent::$my_static . "<br>";
    }
}

$classname = 'OtherClass';
 $classname::doubleColon(); // As of PHP 5.3.0

OtherClass::doubleColon();