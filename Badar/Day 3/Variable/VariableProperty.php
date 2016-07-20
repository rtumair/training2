<?php
namespace foo1;

class Test
{
    public $bar = 'I am barz.';
    public $arr = array('I am A.', 'I am B.', 'I am C.');
    public $r   = 'I am r.';
}

$foo = new Test();
$bar = 'bar';
$baz = array('foo', 'bar', 'arr', 'quux');
echo $foo->$bar . "\n";
echo $foo->{$baz[2]}[2] . "\n";

$start = 'b';
$end   = 'ar';
echo $foo->{$start . $end} . "\n";

$arr = 'arr';
echo $foo->{$arr}[2] . "\n";
