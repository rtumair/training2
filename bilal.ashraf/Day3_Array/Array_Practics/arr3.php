<?php
function foo()
{
    unset($GLOBALS['bar']);
}

$bar = "something";
//foo();
unset($bar);
echo $bar;
?>