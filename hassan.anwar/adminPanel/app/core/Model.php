<?php

/**
 * Created by PhpStorm.
 * Home: hassan.anwar
 * Date: 7/18/16
 * Time: 10:48 AM
 */


require_once 'DBCriteria.php';

class Model
{
    public $db;
    public $table;
    public $columns = array();


    public  function __construct()
    {
        $this->db = new DBCriteria();
    }


    public function insert($model)
    {
        //Setting parameters for insert function
        foreach($model->columns as $key)
        {
            $this->db->columnValues[$key]=$model->$key;
        }

        $this->db->table=$model->table;

        $var=$this->db->insert();

        if($var)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    
    public function selectAll($model)
    {
        $this->db->table=$model->table;
        $result=$this->db->select();

        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }

    public function selectField($model, $field)
    {
        $this->db->table=$model->table;
        $this->db->fields=$field;
        
        $result=$this->db->select();

        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }

    public function selectLimitField($model, $field, $limit)
    {
        $this->db->table=$model->table;
        $this->db->fields=$field;
        $this->db->limit=$limit;

        $result=$this->db->select();

        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }

    public function selectLimitOffsetField($model, $field, $limit, $offset)
    {
        $this->db->table=$model->table;
        $this->db->fields=$field;
        $this->db->limit=$limit;
        $this->db->offset=$offset;

        $result=$this->db->select();

        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }


    public function selectOrderBy($model, $field, $order)
    {
        $this->db->table=$model->table;
        $this->db->fields=$field;
        $this->db->order=$order;

        $result=$this->db->select();

        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }

    public function selectJoin($model, $field, $alias, $joinTable, $alias2, $joinCondition)
    {
        $this->db->table=$model->table;
        $this->db->fields=$field;
        $this->db->alias=$alias;
        $this->db->joinTable=$joinTable;
        $this->db->alias2=$alias2;
        $this->db->join_condition=$joinCondition;

        $result=$this->db->select();

        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }

    }


    public function selectWhere($model, $conditions)
    {
        $this->db->table=$model->table;
        $this->db->where = explode(',', $conditions);
        
        $result=$this->db->select();

        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }

    public function update($model, $conditions)
    {
        //Setting parameters for update function
        foreach($model->columns as $key)
        {
            $this->db->columnValues[$key]=$model->$key;
        }
        $this->db->where = explode(',', $conditions);
        $this->db->table=$model->table;

        $var=$this->db->update();

        if($var)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function delete($model, $conditions)
    {
        $this->db->table=$model->table;
        $this->db->where = explode(',', $conditions);

        $result=$this->db->delete();

        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }


}

?>