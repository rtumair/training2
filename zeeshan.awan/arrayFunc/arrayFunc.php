<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/13/16
 * Time: 11:56 AM
 */

$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));