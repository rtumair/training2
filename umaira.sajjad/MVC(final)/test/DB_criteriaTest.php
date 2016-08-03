<?php

/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 8/2/16
 * Time: 12:00 PM
 */
namespace DB;

use PHPUnit_Framework_TestCase;

require '../app/core/Database/DB_criteria.php';

class DB_criteriaTest extends PHPUnit_Framework_TestCase

{
    private $object;

    public function __construct()
    {
        $this->object = new \DB\DB_criteria();
    }

    public function testWhereIn()
    {
        // WHERE column_name IN (value1,value2,...);
        $column_name = 'user_city';
        $values = array('Karachi', 'Lahore');

        $this->assertEquals(null, $this->object-> WhereIn($column_name, $values));
    }

    public function testWhereBetween()
    {
        //        WHERE column_name BETWEEN value1 AND value2;
        $column_name = 'user_id';
        $values = array(1, 10);
        
        $this->assertEquals(null, $this->object-> WhereBetween($column_name, $values));
    }

    public function testSetGroupBy()
    {
        $column_name = "user_city";
        $this->assertEquals(null, $this->object->SetGroupBy($column_name));
    }

    public function testSetJoin()
    {
        // INNER JOIN Customers
        // ON Orders.CustomerID=Customers.CustomerID;
        $table1 = 'user';
        $table2 = 'Student';
        $fktable1 = 'user_id';
        $fktable2 = 'id';
        
        $this->assertEquals(null, $this->object->setJoin($table1, $table2, $fktable1, $fktable2));
    }

}