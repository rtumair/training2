<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/18/16
 * Time: 2:19 PM
 */
require_once "db.php";
class DbCriteria
{
    public $select = '*';
    public $where ;
    public $table;
    public $cols=[];
    public $vals=[];
    public $group_by;
    public $having;
    public $pk;

    
    public function selectAll(){

        if($this->select == '*')
        $query = 'Select '.$this->select.' from ' . $this->table ;
        else{
            $fields =  rtrim(implode(',', $this->select), ',');
            $query = 'Select '.$fields.' from ' . $this->table ;
        }

        $db=Db::getInstance();
        $conn=$db->getConnection();
       return $conn->query($query);

    }


    public function insert()
    {
        $fields =  rtrim(implode(',', $this->cols), ',');

        $values = rtrim(implode(',', $this->vals), ',');

        $valList='';
        $prefix = '';
        foreach ($this->vals as $val)
        {
            $valList .= $prefix . '\'' . $val . '\'';
            $prefix = ', ';

        }



        $query = 'INSERT INTO ' . $this->table . ' ( '. $fields . ') ' . ' VALUES (' . $valList . ')';

        $db=Db::getInstance();
        $conn=$db->getConnection();
        $conn->query($query);

    }
    
    public function where()
    {

        if($this->select == '*')
            $query = 'Select '.$this->select.' from ' . $this->table ." ". $this->where;
        else{
            $fields =  rtrim(implode(',', $this->select), ',');
            $query = 'Select '.$fields.' from ' . $this->table ." ". $this->where;
        }



        $db=Db::getInstance();
        $conn=$db->getConnection();
        return $conn->query($query);
    }
    
    public function setWhere($arr)
    {

        if($this->where == ''){
            $fields = explode(',', rtrim(implode(',', $arr), ','));

            $this->where = 'where '.$fields[0] .' = '. '\''.$fields[1].'\'';
        }
        else {
            $fields =  explode(',', rtrim(implode(',', $arr), ','));
            $this->where = $this->where . ' and ' . $fields[0].' = '.'\''.$fields[1].'\'';
        }
    }

    public function setWhereLessThanEqualTo($arr)
    {

        if($this->where == ''){
            $fields = explode(',', rtrim(implode(',', $arr), ','));

            $this->where = 'where '.$fields[0] .' <= '. '\''.$fields[1].'\'';
        }
        else {
            $fields =  explode(',', rtrim(implode(',', $arr), ','));
            $this->where = $this->where . ' and ' . $fields[0].' <= '.'\''.$fields[1].'\'';
        }
    }

    public function setWhereGreaterThanEqualTo($arr)
    {

        if($this->where == ''){
            $fields = explode(',', rtrim(implode(',', $arr), ','));

            $this->where = 'where '.$fields[0] .' >= '. '\''.$fields[1].'\'';
        }
        else {
            $fields =  explode(',', rtrim(implode(',', $arr), ','));
            $this->where = $this->where . ' and ' . $fields[0].' >= '.'\''.$fields[1].'\'';
        }
    }

    public function update ()
    {
        $fields =  explode(',',rtrim(implode(',', $this->cols), ','));

        $values = explode(',',rtrim(implode(',', $this->vals), ','));

        $valList='';
  
        $i=0;

        if(count($fields) == count($values)) {
            foreach ($this->cols as $col) {
                $valList .= ' '.$col . ' = ' . ' ' . '\'' . $values[$i] . '\',';

                $i++;

            }
        }

        $valList = rtrim($valList,',');



        $query = 'UPDATE ' . $this->table . ' set '.$valList.' '.$this->where;
      //  echo $query;
        $db=Db::getInstance();
        $conn=$db->getConnection();
        $conn->query($query);
    }


    public function delete ()
    {
        $query = 'Delete from ' . $this->table.' '.$this->where;
   //     echo $query;
        $db=Db::getInstance();
        $conn=$db->getConnection();
        $conn->query($query);
    }


    public function export_csv()
    {
        $db=Db::getInstance();
        $conn=$db->getConnection();

        $sth = $conn->prepare(
            "SELECT * FROM ". $this->table
        );

        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        return $sth;


    }


}


