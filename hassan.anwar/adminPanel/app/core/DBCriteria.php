<?php

/**
 * Created by PhpStorm.
 * Home: hassan.anwar
 * Date: 7/18/16
 * Time: 10:02 AM
 */
 

require_once 'Database.php';

class DBCriteria extends Database
{

    public $con;
    public $statement;

    public $table;
    public $columnValues=[];


    public $joinTable;
    public $alias;
    public $alias2;
    public $join;
    public $join_condition;
    public $where=[];
    public $fields='*';
    public $order;
    public $limit=null;
    public $offset;

    public $select;

    public $having;
    public $groupby;


    public function __construct()
    {
        $this->con = Database::getInstance()->getConnection();

    }

    public function prepare($query)
    {
        $this->statement= $this->con->prepare($query);
    }

    public function execute()
    {
        return $this->statement->execute();
    }

    public function fetchAll()
    {
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        return $this->statement->fetchAll();
    }

    public function fetch()
    {
        $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        return $this->statement->fetch();
    }

    public function insert()
    {

        $fieldNames = implode(',', array_keys($this->columnValues));

        $query = "INSERT INTO " . ucfirst($this->table) . " (" . $fieldNames . ") " . "VALUES('" . implode("', '", $this->columnValues) . "')";

        $this->prepare($query);

        $result = $this->execute();

        return $result;

    }

    public function select()
    {
//        if($this->fields!='*')
//        {
//            $this->fields = explode(',', $this->fields);
//            $this->fields = implode(',', array_values($this->fields));
//        }

        $query="SELECT $this->fields FROM " . ucfirst($this->table) . ($this->alias ? " $this->alias":'') . ($this->join ? " $this->join":'') .
            ($this->joinTable ? " $this->joinTable":'') . ($this->alias2 ? " $this->alias2 ON":'') . ($this->join_condition ? " $this->join_condition": '');

            if($this->where)
            {
                $query= $query . ($this->where ? " WHERE ".$this->where[0] : '');
                for ($i = 1; $i < count($this->where); $i++) {
                    $query= $query . " && " . $this->where[$i];
                }
            }

        $query= $query . ($this->limit ? " LIMIT $this->limit" :'') . (($this->offset && $this->limit ? " OFFSET $this->offset":''))
            . ($this->order ? " ORDER BY $this->order":'');

        $this->prepare($query);
        $this->execute();

        $result=$this->fetchAll();

        return $result;

    }


    public function update()
    {

        $query = "UPDATE " . ucfirst($this->table) . " SET ";


        if($this->columnValues)
        {
            foreach($this->columnValues as $key => $value)
            {
                if($key=='updated_on' && $value!='')
                    $query= $query . $key . "=" . $value . ",";
                else if($value!='null' && $key!='updated_on')
                    $query= $query . $key . "= '" . $value . "',";

            }

            $query=rtrim($query, ",");
        }

        if($this->where)
        {
            $query= $query . ($this->where ? " WHERE ".$this->where[0] : '');
            for ($i = 1; $i < count($this->where); $i++) {
                $query= $query . " && " . $this->where[$i];
            }
        }

        $this->prepare($query);

        $result = $this->execute();

        return $result;

    }


    public function delete()
    {
        $query="DELETE FROM " . ucfirst($this->table);

        if($this->where)
        {
            $query= $query . ($this->where ? " WHERE ".$this->where[0] : '');
            for ($i = 1; $i < count($this->where); $i++) {
                $query= $query . " && " . $this->where[$i];
            }
        }

        $this->prepare($query);

        $result = $this->execute();

        return $result;
    }



}
 
 
?>

