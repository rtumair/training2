<?php

require_once '../app/core/Db_Criteria.php';
class StudentModel extends Db_Criteria
{
   public $name;
   public $fathername;
   public $dob;
   public $schoolname;
   public $city;
   public $destination;
   public $status;
}