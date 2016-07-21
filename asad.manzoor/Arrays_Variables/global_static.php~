<?php
function recursive()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        recursive();
    }
    $count--;
}

recursive();
