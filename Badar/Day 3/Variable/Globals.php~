<?php
$a = 1; /* global scope */

function test()
{
    echo"Nothing will be printed : accesing variable that is not locall to function"."<br>";
    echo $a; /* reference to local scope variable */
}

test();
?>


<?php
$a = 1;
$b = 2;

function sum()
{
    global $a, $b;

    $b = $a + $b;
}

sum();
echo $b."<br>";
?>



<?php
$a = 1;
$b = 5;

function sum2()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

sum2();
echo $b;


