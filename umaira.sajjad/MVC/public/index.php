<?php
/**
 * User lands on this default on index page when app opened
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 2:05 PM
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../app/init.php';
require_once('../app/core/db_connection.php');

$app = new App;