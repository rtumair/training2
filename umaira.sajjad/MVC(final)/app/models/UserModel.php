<?php
/**
 * Created by PhpStorm.
 * User: umaira.sajjad
 * Date: 7/18/16
 * Time: 4:53 PM
 */


class UserModel extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this -> table_name = 'user';
        $this-> column_fields = array('user_id', 'user_name', 'user_city', 'password', 'user_email');
    }


    public function authenticate($user_values)
    {
        $db = new \DB\Database;
        $Criteria = new \DB\DB_criteria();
        $db -> table_name = $this-> table_name;
        $Criteria -> SetSelect (['*']);
        $Criteria-> WhereEquals($user_values, 'AND');

        $isSuccessful =  $db -> Select($Criteria);
        return $isSuccessful;
    }

    public function Import()
    {
        $db = new \DB\Database;
        $Criteria = new \DB\DB_criteria();
        $db -> table_name = $this-> table_name;
        
        if (($handle = fopen($_FILES['filename']['tmp_name'], "r")) !== FALSE)
        {
            fgetcsv($handle);
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
            {
                array_shift($data);
                $Criteria -> SetInsert($this -> column_fields, $data);
                $isSuccessful = $db -> Insert($Criteria);
            }
            fclose($handle);
        }

          return $isSuccessful;
    }
    
}