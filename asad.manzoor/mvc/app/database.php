<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/15/16
 * Time: 4:49 PM
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver'=>'mysqli',
    'host' => '127.0.0.1',
    'username' =>'root',
    'password' =>'123',
    'database' =>'University',
    'charset' =>'utf8',
    'collation' =>'utf8_unicode_ci',
    'prefix' =>'',
]);

$capsule->bootEloquent();