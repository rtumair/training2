
<?php
	// $array = array(
	//     1    => "a",
	//     "1"  => "b",
	//     1.5  => "c",
	//     true => "d",
	// );
	// var_dump($array);
	// As all the keys in the above example are cast to 1, the value will be overwritten on every new element and the last assigned value "d" is the only one left over
	// $array = array(
	//     "foo" => "barrr",
	//     "bar" => "foo",
	//     100   => -100,
	//     -100  => 100,
	// );
	// var_dump($array);
	
	// $array = array("foo", "bar", "hello", "world");
	// var_dump($array);

	
	// $array = array(
 //         "a",
 //         "b",
 //    6 => "c",
 //         "d",
	// );
	// var_dump($array);
	// As you can see the last value "d" was assigned the key 7. This is because the largest integer key before that was 6. 


	// $array = array(
	//     "foo" => "bar",
	//     42    => 24,
	//     "multi" => array(
	//          "dimensional" => array(
	//              "array" => "foo"
	//          )
	//     )
	// );

	// var_dump($array["foo"]);
	// var_dump($array[42]);
	// var_dump($array["multi"]["dimensional"]["array"]);
	//$array[42] and $array{42} will both do the same thing 

	// function getArray() {
	//     return array(1, 2, 3);
	// }

	// // on PHP 5.4
	// $secondElement = getArray()[1];

	// // previously
	// $tmp = getArray();
	// $secondElement = $tmp[1];

	// // or
	// list(, $secondElement) = getArray()

	// $arr = array(5 => 1, 12 => 2);

	// $arr[] = 56;    // This is the same as $arr[13] = 56;
	//                 // at this point of the script

	// $arr["x"] = 42; // This adds a new element to
	//                 // the array with key "x"
	                
	// unset($arr[5]); // This removes the element BY KEY from the array

	// var_dump($arr);



	// Create a simple array.
	// $array = array(1, 2, 3, 4, 5);
	// //print_r($array);

	// // Now delete every item, but leave the array itself intact:
	// foreach ($array as $i => $value) {
	//     unset($array[$i]);
	// }
	// //print_r($array);

	// // Append an item (note that the new key is 5, instead of 0).
	// $array[] = 6;
	// //print_r($array);

	// // Re-index:
	// $array = array_values($array);
	// $array[] = 7;
	// print_r($array);

// useful functions: unset(), array_values, for each

	// Show all errors
	// error_reporting(E_ALL);

	// $arr = array('fruit' => 'apple', 'veggie' => 'carrot');

	// Correct
	// print $arr['fruit'];  // apple
	// print $arr['veggie']; // carrot

	// Incorrect.  This works but also throws a PHP error of level E_NOTICE because
	// of an undefined constant named fruit
	// 
	// Notice: Use of undefined constant fruit - assumed 'fruit' in...
	// print $arr[fruit];    // apple

	// // This defines a constant to demonstrate what's going on.  The value 'veggie'
	// // is assigned to a constant named fruit.
	// define('fruit', 'veggie');

	// Notice the difference now
	// print $arr['fruit'];  // apple
	// print $arr[fruit];    // carrot

	// The following is okay, as it's inside a string. Constants are not looked for
	// // within strings, so no E_NOTICE occurs here
	// print "Hello $arr[fruit]";      // Hello apple

	// // With one exception: braces surrounding arrays within strings allows constants
	// // to be interpreted
	// print "Hello {$arr[fruit]}";    // Hello carrot
	// print "Hello {$arr['fruit']}";  // Hello apple

	// // This will not work, and will result in a parse error, such as:
	// // Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
	// // This of course applies to using superglobals in strings as well
	// print "Hello $arr['fruit']";
	// print "Hello $_GET['foo']";

	// // Concatenation is another option
	// print "Hello " . $arr['fruit']; // Hello apple


	// IMPORTANT: braces surrounding arrays within strings allows constants
// to be interpreted.  what's inside the square brackets ('[' and ']') must be an expression

	// class A {
	//     private $A; // This will become '\0A\0A'
	// }

	// class B extends A {
	//     private $A; // This will become '\0B\0A'
	//     public $AA; // This will become 'AA'
	// }

	// var_dump((array) new B());
	// Array as (property-)map
	// $map = array( 'version'    => 4,
	//               'OS'         => 'Linux',
	//               'lang'       => 'english',
	//               'short_tags' => true
	//             );
	            
	// // strictly numerical keys
	// $array = array( 7,
	//                 8,
	//                 0,
	//                 156,
	//                 -10
	//               );
	// // this is the same as array(0 => 7, 1 => 8, ...)

	// $switching = array(         10, // key = 0
	//                     5    =>  6,
	//                     3    =>  7, 
	//                     'a'  =>  4,
	//                             11, // key = 6 (maximum of integer-indices was 5)
	//                     '8'  =>  2, // key = 8 (integer!)
	//                     '02' => 77, // key = '02'
	//                     0    => 12  // the value 10 will be overwritten by 12
	//                   );
	                  
	// // empty array
	// $empty = array();    

	// $colors = array('red', 'blue', 'green', 'yellow');

	// foreach ($colors as $color) {
	//     echo "Do you like $color?\n";
	// }
	// foreach ($colors as &$color) {
	//     $color = strtoupper($color);
	// strtoupper converts to upper case
	// }
	// print_r($colors);
	// what was the point of unset here? :/

	// $firstquarter  = array(1 => 'January', 'February', 'March');
	// print_r($firstquarter);


// count counts all the items 


	// $fruits = array ( "fruits"  => array ( "a" => "orange",
 //                                       "b" => "banana",
 //                                       "c" => "apple"
 //                                     ),
 //                  "numbers" => array ( 1,
 //                                       2,
 //                                       3,
 //                                       4,
 //                                       5,
 //                                       6
 //                                     ),
 //                  "holes"   => array (      "first",
 //                                       5 => "second",
 //                                            "third"
 //                                     )
 //                );

	// // Some examples to address values in the array above 
	// // echo $fruits["holes"][5];    // prints "second"
	// // echo $fruits["fruits"]["a"]; // prints "orange"
	// // unset($fruits["holes"][0]);  // remove "first"

	// // Create a new multi-dimensional array
	// $juices["apple"]["green"] = "good"; 
	// var_dump($juices); // prints array(1) { ["apple"]=> array(1) { ["green"]=> string(4) "good" } } 


	// Array assignment always involves value copying. Use the reference operator to copy an array by reference. 
	// $arr1 = array(2, 3);
	// $arr2 = $arr1;
	// $arr2[] = 4; // $arr2 is changed,
	//              // $arr1 is still array(2, 3)
	             
	// $arr3 = &$arr1;
	// $arr3[] = 4; // now $arr1 and $arr3 are the same

	// $foo = array('bar' => 'baz');
	// echo "Hello {$foo['bar']}!"; // Hello baz!
     
?>
