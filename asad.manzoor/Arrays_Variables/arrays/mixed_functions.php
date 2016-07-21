<?php

//loop
$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as $color) {
    echo "Do you like $color?<br>";
}

//change value in loop
foreach ($colors as &$color) {
    $color = strtoupper($color);
}
print_r($colors);

//different way to assign value to array index
$a = array( 'color' => 'red',
            'taste' => 'sweet',
            'shape' => 'round',
            'name'  => 'apple',
            4        // key will be 0
          );

$b = array('a', 'b', 'c');
echo "<br>";
print_r($a);
echo "<br>";
print_r($b);

