<?php

/**
 * Created by PhpStorm.
 * User: hassan.anwar
 * Date: 7/15/16
 * Time: 10:50 AM
 */

require_once('/var/www/html/mvc/app/Smarty/Smarty.class.php');

class Student extends Controller
{

    protected $model;
    protected $smarty;

    public function __construct()
    {
        $this->model=$this->model('StudentModel');
        $this->smarty=new Smarty;
    }

    public function index()
    {
        //Setting View
        $result=$this->model->selectAll($this->model);

        if($result)
        {
            //$this->view('home/index', $result);
            $this->smarty->assign('data',$result);
            $this->smarty->assign('count',1);

            // display it
            $this->smarty->display('/var/www/html/mvc/app/views/Student/manageStudents.tpl');

        }
    }

    public function addStudent()
    {
        //$this->view('Student/add_student', []);
        $this->smarty->display('/var/www/html/mvc/app/views/Student/add_student.tpl');
    }

    public function importStudents()
    {
        //$this->view('Student/import_students', []);
        $this->smarty->display('/var/www/html/mvc/app/views/Student/import_students.tpl');
    }

    public function updateStudent($id)
    {
        $conditions='id='.$id;

        $result=$this->selectWhere($conditions);
        $this->smarty->assign('data',$result[0]);

        //$this->view('Student/update_student', $result);
        $this->smarty->display('/var/www/html/mvc/app/views/Student/update_student.tpl');
    }


    public function create()
    {
        $this->model->student_name = $_REQUEST["name"];
        $this->model->dob = $_REQUEST["dob"];
        $this->model->father_name = $_REQUEST["fathername"];
        $this->model->class = $_REQUEST["class"];
        $this->model->address = $_REQUEST["address"];
        $this->model->phone_no = $_REQUEST["phoneno"];
        $this->model->status = 1;

        $result=$this->model->insert($this->model);

        if($result)
        {
            header('Location: index');
        }

    }

    public function selectAll()
    {
        $result=$this->model->selectAll($this->model);

        if($result)
        {
            $this->view('Student/manageStudent', $result);
        }
    }

    public function selectField($field)
    {
        $result=$this->model->selectField($this->model, $field);

        if($result)
        {
            $this->view('home/displayUser', $result);
        }
    }

    public function selectWhere($conditions)
    {
        $result=$this->model->selectWhere($this->model, $conditions);

        return $result;
//        if($result)
//        {
//            $this->view('home/displayUser', $result);
//        }
    }

    public function selectLimitField($field, $limit)
    {
        $result=$this->model->selectLimitField($this->model, $field, $limit);

        if($result)
        {
            $this->view('home/displayUser', $result);
        }
    }

    public function selectLimitOffsetField($field, $limit, $offset)
    {
        $result=$this->model->selectLimitOffsetField($this->model, $field, $limit, $offset);

        if($result)
        {
            $this->view('home/displayUser', $result);
        }
    }

    public function selectOrderBy($field, $order)
    {
        $result=$this->model->selectOrderby($this->model, $field, $order);

        if($result)
        {
            $this->view('home/displayUser', $result);
        }
    }


    public function update($conditions)
    {
        $conditions='id='.$conditions;
        $this->model->student_name = $_REQUEST["name"];
        $this->model->dob = $_REQUEST["dob"];
        $this->model->father_name = $_REQUEST["fathername"];
        $this->model->class = $_REQUEST["class"];
        $this->model->address = $_REQUEST["address"];
        $this->model->phone_no = $_REQUEST["phoneno"];

        $result=$this->model->update($this->model, $conditions);

        if($result)
        {
            header('Location: ../index');
        }

    }

    public function delete($conditions)
    {
        $conditions='id='.$conditions;
        $result=$this->model->delete($this->model, $conditions);

        if($result)
        {
            header('Location: ../index');
        }

    }

    function import()
    {
        $file = fopen($_FILES["fileToUpload"]["tmp_name"], "r");

        if ($file) {
            while (($data = fgetcsv($file)) !== FALSE) {
                $num = count($data);
                for ($c = 0; $c < $num; $c++) {
                    $col[$c] = $data[$c];
                }

                $this->model->student_name = $col[0];
                $this->model->dob = $col[1];
                $this->model->father_name = $col[2];
                $this->model->class = $col[3];
                $this->model->address = $col[4];
                $this->model->phone_no = $col[5];
                $this->model->status = $col[6];

                $this->model->insert($this->model);


            }
            header("location: index.php");

            fclose($file);

        }

    }

    function export()
    {

        ob_clean();

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=studentRecord.csv');

        $result=$this->model->selectAll($this->model);

        $file = fopen('php://output', 'w');

        // output the column headings
        fputcsv($file, array('ID', 'Student Name', 'Date of Birth', 'Father Name', 'Class', 'Address', 'Phone_no', 'Created On', 'Updated on', 'Status'));

        if($file)
        {
            foreach ($result as $row )
            {

                fputcsv($file, $row);
            }

            fclose($file);

        }
        exit(0);

    }

}