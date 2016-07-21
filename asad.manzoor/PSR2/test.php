<?php

namespace test;

class Test
{
    public function fooDisplay()
    {
        $foo = 10;
        while ($foo != 0) {
            echo $foo--."</br>";
            if ($foo == 5) {
                echo "five"."</br>";
            }
        }
    }
}

$data = new Test();
$data->fooDisplay();
