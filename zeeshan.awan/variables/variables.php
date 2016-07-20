<?php

$a = 'hello';
$$a = 'world';

echo $$a . "\n";
echo "$a $$a" . "\n";
echo "$a ${$a}" . "\n";
echo "$a $hello" . "\n";
echo "$a[1]" . "\n";

$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$b = "Hello";

echo $$b . "\n";
echo $$$b . "\n";
echo $$$$b . "\n";

$nameTypes    = array("first", "last", "company");
$name_first   = "John";
$name_last    = "Doe";
$name_company = "PHP.net";

foreach($nameTypes as $type)
    print ${"name_$type"
} . "\n";

$tab = array("one", "two", "three");
$a = "tab";
${$a}[] =  "four"; 
print_r($tab);

$price_for_monday = 10;
$price_for_tuesday = 20;
$price_for_wednesday = 30;

$today = 'tuesday';

$price_for_today = ${ 'price_for_' . $today};
echo $price_for_today . "\n";

class foo 
{ 
    var $bar; 
    var $baz; 

    function foo() 
    { 
        $this->bar = 3; 
        $this->baz = 6; 
    } 
} 

$f = new foo(); 
echo "f->bar=$f->bar  f->baz=$f->baz\n"; 

$obj  = 'f'; 
$attr = 'bar'; 
$val  = $$obj->{$attr}; 

echo "obj=$obj  attr=$attr  val=$val\n"; 
