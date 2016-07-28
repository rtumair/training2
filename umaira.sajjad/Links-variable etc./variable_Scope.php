
<?php
	error_reporting(1);
	ini_set('display_errors', 'On');
	// ----practice 1 --------//
	// $a = 1;
	// $b = 2;

	// function Sum()
	// {
	//     global $a, $b;

	//     $b = $a + $b;
	// } 

	// Sum();
	// echo $b;
	// -------practice 2 --------//

		
		// $a = 1;
		// $b = 2;

		// function Sum()
		// {
		//     $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
		// } 

		// Sum();
		// echo $b;
		
	//----- practice 3 

	// function test_global()
	// {
	//     // Most predefined variables aren't "super" and require 
	//     // 'global' to be available to the functions local scope.
	//     global $HTTP_POST_VARS;
	    
	//     echo $HTTP_POST_VARS['name'];
	    
	//     // Superglobals are available in any scope and do 
	//     // not require 'global'. Superglobals are available 
	//     // as of PHP 4.1.0, and HTTP_POST_VARS is now
	//     // deemed deprecated.
	//     echo $_POST['name'];
	// }
	// test_global(); // didn't print anythign :/

	// -----------------practice 4
	// 	function test()
	// {
	//     $a = 0;
	//     echo $a;
	//     $a++;
	// }
	// test();

	// // ------practice 5
	// 	function test()
	// {
	//     static $a = 0;
	//     echo $a;
	//     $a++;
	// }
	// test();
	// practicwe 6
	//  A static variable exists only in a local function scope, but it does not lose its value when program execution leaves this scope. cannit declare them in expressions (practice 7)
	// 	function test()
	// {
	//     static $count = 0;

	//     $count++;
	//     echo $count;
	//     if ($count < 10) {
	//         test();
	//     }
	//     //$count--;
	// }
	// test();

	// -----practice 8
	// when assigning a reference to a static variable, it's not remembered when you call the &get_instance_ref() function a second time
?>
