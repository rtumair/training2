<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/21/16
 * Time: 9:45 AM
 */

require_once "database/DbCriteria.php";
class AdminModel extends DbCriteria
{
    public $uname;

    public $timestamps =[];
    protected $fillable = ['uname'];

}