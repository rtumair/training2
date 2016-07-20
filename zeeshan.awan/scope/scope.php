<?php

$a = 1;
$b = 2;

function sum()
{
    global $a, $b;

    $b = $a + $b;
}

sum();
echo $b . "\n";

$b=2;

function sum1()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

sum1();
echo $b . "\n";

function test()
{
    static $a = 0;
    echo $a . "\n";
    $a++;
    if ($a <= 10) {
        test();
    }
}

test();

for($j=0; $j<3; $j++)
{
     if($j == 1)
        $a = 4;
}
echo $a . "\n";


function foo(){ 
    global $f_a;   
    $f_a = 'a'; 
    
    function bar(){ 
        global $f_a; 
        echo '"f_a" in BAR is: ' . $f_a . "\n";  
    } 
    
    bar(); 
    echo '"f_a" in FOO is: ' . $f_a . "\n"; 
} 

class A {
    function Z() {
        static $count = 0;        
        printf("%s: %d\n", get_class($this), ++$count);
    }
}

class B extends A {}

$a = new A();
$b = new B();
$a->Z();
$a->Z();
$b->Z();
$a->Z();
