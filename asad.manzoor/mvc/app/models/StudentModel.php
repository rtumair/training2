<?php
/**
 * Created by PhpStorm.
 * User: asad.manzoor
 * Date: 7/19/16
 * Time: 11:34 AM
 */
require_once "../app/core/DBCriteria.php";

class StudentModel
{
    public $db;

    public $id;
    public $student_name;
    public $dob;
    public $father_name;
    public $class;
    public $address;
    public $ph_no;
    public $created_on;
    public $updated_on;
    public $status;


    public  function __construct()
    {
        $this->db = new DBCriteria();
        $this->db->table='Student';
    }

    public function select_all()
    {

        $this->db->select=array('id','student_name','dob','father_name','class','address','ph_no','status');
        $result = $this->db->select_all() ;
        return $result;
    }

    public function insert($model_obj){
        $this->db->attributes= array($model_obj->student_name,$model_obj->dob,$model_obj->father_name,$model_obj->class,$model_obj->address,$model_obj->ph_no);
        $result = $this->db->insert();
        return $result;
    }

    public function delete($model_obj)
    {
        $this->db->attributes= array($model_obj->id);
        $result= $this->db->delete();
        if($result){
            echo "record deleted";
        }

    }

    public function update($model_obj)
    {
        
        $this->db->attributes= array($model_obj->id,$model_obj->student_name,$model_obj->dob,$model_obj->father_name,$model_obj->class,$model_obj->address,$model_obj->ph_no);
        $result = $this->db->update();
        if($result){
            echo "record updated";
        }
    }

    public function get_student($model_obj)
    {
        $this->db->attributes= array($model_obj->id);
        $result = $this->db->get_student();
        return $result;
    }

    public function export()
    {
        $this->db->export();
    }

    public function import($filename)
    {
        $this->db->attributes=array($filename);
        $this->db->import();
    }


}