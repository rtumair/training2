
<?php
// PHP 5
$colors = array('red', 'blue', 'green', 'yellow');
foreach ($colors as &$color) {
    $color = strtoupper($color);
}
print_r($colors);
unset($color); /* ensure that following writes to
$color will not modify the last array element */

// Workaround for older versions
foreach ($colors as $key => $color) {
    $colors[$key] = strtoupper($color);

}

print_r($colors);
?>