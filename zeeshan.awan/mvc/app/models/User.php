<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/15/16
 * Time: 2:25 PM
 */
//use Illuminate\Database\Eloquent\Model as Eloquent;
require_once "database/DbCriteria.php";
class User extends DbCriteria
{
    public $name;

    public $timestamps =[];
    protected $fillable = ['name'];

}