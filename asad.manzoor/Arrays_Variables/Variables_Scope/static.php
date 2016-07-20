<?php
function test_static()
{
    static $a = 0;
    echo $a;
    $a++;
}

test_static();
test_static();
