<?php
class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}


print Foo::$my_static . "<br>";//foo

$foo = new Foo();
print $foo->staticValue() . "<br>";//foo
//print $foo->my_static . "<br>";      // Undefined "Property" my_static

print $foo::$my_static . "<br>";//foo
$classname = 'Foo';
print $classname::$my_static . "<br>"; // As of PHP 5.3.0//foo

print Bar::$my_static . "<br>";//foo
$bar = new Bar();
print $bar->fooStatic() . "<br>";//foo
?>