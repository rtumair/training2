<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/15/16
 * Time: 11:00 AM
 */



class Home extends Controller
{
    protected $user;

    protected $smarty;

    public function __construct()
    {
        $this->user = $this->model('User');
        $this->smarty = new Smarty;
    }

    public function index($name=''){

        $user=$this->user;


        $user->name = $name;
        $this->user->table='users';

       // $smarty = new Smarty;

        $this->smarty->assign('users' , $this->user->selectAll());
        


        $this->smarty->display('../app/views/home/index.tpl');
        
        //$this->view('home/index' , ['users' => $this->user->selectAll()]);
    }

    public function create($name='')
    {
        $name=$_POST['name'];
        $pswd=$_POST['pswd'];
        $val_arr = array($name,$pswd);
        $this->user->table='users';
        $this->user->cols=array('name','pswd');
        $this->user->vals=$val_arr;
        $this->user->insert();

        $this->smarty->assign('users' , $this->user->selectAll());

        $this->smarty->display('../app/views/home/index.tpl');
        //$this->view('home/index' , ['users' => $this->user->selectAll()]);

        /* $this->user->create([
            'name' => $name
        ]); */
    }

    public function addUser($name='')
    {
        $this->view('home/addUser' );


    }

// get all

    public function getAll()
    {
        $this->user->table='users';
        $this->user->select=array('id','name');
        foreach($this->user->selectAll() as $row)
        {
            echo $row['id'] . " ".$row['name']. "\n";
        }

    }

    public function fetchConditional()
    {
        $this->user->table='users';
        $this->user->select=array('id','name');
        $this->user->setWhere(array('name','shan'));
        $this->user->setWhere(array('pswd','123'));
       // $this->user->setWhere(array('id',3));

        foreach($this->user->where() as $row)
        {
            echo $row['id'] . " ".$row['name']. "\n";
        }
    }

    public function update ()
    {
        $id= $_POST['id'];
        $name = $_POST['name'];
        $pswd = $_POST['pswd'];
        $val_arr = array($name , $pswd);
        $this->user->table='users';
        $this->user->setWhere(array('id',$id));
        $this->user->cols= array('name','pswd');
        $this->user->vals= $val_arr;
        $this->user->update();

        $this->smarty->assign('users' , $this->user->selectAll());

        $this->smarty->display('../app/views/home/index.tpl');
        //$this->view('home/index' , ['users' => $this->user->selectAll()]);
    }

    public function delete ()
    {
        $id = $_GET['id'];
        $this->user->table='users';
        $this->user->setWhere(array('id',$id));

        $this->user->delete();

        $this->smarty->assign('users' , $this->user->selectAll());

        $this->smarty->display('../app/views/home/index.tpl');
        //$this->view('home/index' , ['users' => $this->user->selectAll()]);
    }

    public function editUser ()
    {
        $id = $_GET['id'];
        $this->user->table='users';
        $this->user->setWhere(array('id',$id));

        $this->smarty->assign('user' , $this->user->where());

        $this->smarty->display('../app/views/home/editUser.tpl');
        //$this->view('home/editUser',['user' => $this->user->where()] );
    }

    function export_csv() {

        $this->user->table='users';
        $sth =  $this->user->export_csv();

        $fp = fopen('php://output','w');
        fputcsv($fp, array("id","name","created_at","updated_at"));
        while ($list = $sth->fetch(PDO::FETCH_ASSOC)) {
            fputcsv($fp, $list);
        }

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=data.csv');

        exit();



    }

    function import_csv ()
    {
        $this->view('home/import_csv' );
    }

    function upload_csv()
    {

        if (isset($_POST['submit'])) {

            if (is_uploaded_file($_FILES['filename']['tmp_name'])) {


            }
            $this->user->table='users';

            $this->user->cols=array('name','pswd');

            $handle = fopen($_FILES['filename']['tmp_name'], "r");

            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $this->user->vals = array($data[0], $data[1]);
                $this->user->insert();

            }

            fclose($handle);

            $this->smarty->assign('users' , $this->user->selectAll());

            $this->smarty->display('../app/views/home/index.tpl');

            //$this->view('home/index' , ['users' => $this->user->selectAll()]);

        }

    }


}