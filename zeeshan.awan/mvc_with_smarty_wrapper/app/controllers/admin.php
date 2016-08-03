<?php
/**
 * Created by PhpStorm.
 * User: zeeshan.awan
 * Date: 7/21/16
 * Time: 9:34 AM
 */



class Admin extends Controller
{
    protected $admin;

    protected $smarty;
    protected $tpl;
    protected $my_smarty;
    public function __construct()
    {
        $this->admin = $this->model('AdminModel');
        $this->smarty = new Smarty;
        session_start();
        //$this->tpl = new SMTemplate();
        $this->my_smarty=new Smarty_MyApp();

    }

    public function index()
    {



        // $smarty = new Smarty;

     //   $this->smarty->assign('users', $this->user->selectAll());
            
           // session_destroy();
       // $this->tpl->addParams('name', 'george smith');
       // $this->tpl->addParams('address', '45th & Harris');

        //$this->tpl->render('index');

          if(isset($_SESSION["admin"])  || isset($_COOKIE['remember'])) {
             if(isset($_COOKIE['remember'])){
              		$_SESSION['admin'] = $_COOKIE['remember'];
		}
             // $this->smarty->display('../app/views/admin/home.tpl');
              $this->my_smarty->render('admin','home');

          }
          else {
              //$this->smarty->display('../app/views/admin/index.tpl');
              $this->my_smarty->render('admin','index');

          }

        //$this->view('home/index' , ['users' => $this->user->selectAll()]);
    }

    public function logout()
    {
        //session_unset();
        $past = time() - 3600;

        setcookie('remember', '', $past, '/');


        session_destroy();
        header('Location: /my_work/mvc/public/admin');
          //  $this->smarty->display('../app/views/admin/index.tpl');

        //$this->view('home/index' , ['users' => $this->user->selectAll()]);
    }

    public function home ()
    {
        $found = false;
        $this->admin->table = 'admins';

        $uname = $_POST['uname'];
        $pswd = $_POST['pswd'];

        $this->admin->setWhere(array('uname', $uname));
        $this->admin->setWhere(array('pswd',$pswd));
        $arr = $this->admin->where();
        $year = time() + 31536000;

            foreach ($arr as $row) {
                //echo $row['id'] . " ".$row['uname']. "\n";
                //   $this->smarty->assign('admin', $row);
                //      ini_set('session.gc_maxlifetime', 60);
                // session_set_cookie_params(60);
                setcookie('remember', '',time() + 3600 ,'/');

              if (isset($_POST['remember'])){
                if ($_POST['remember']) {
                    setcookie('remember', $_POST['uname'], $year,'/');
                   // echo 'asdsad '.$_COOKIE['remember_me'];
                } elseif (!$_POST['remember']) {

                }
            }


               // echo  $_COOKIE['remember_me'] or die();
          //  session_start();

            $_SESSION["admin"] = $row['uname'];
            $found = true;

            break;

            }
        if(!$found)
        {

            //header('Location: /my_work/mvc/public/admin');
            echo "<script>
            alert('Invalid username or password');
            window.location.href='/my_work/mvc/public/admin';
            </script>";
        }
        else {
           // $this->smarty->display('../app/views/admin/home.tpl');
            $this->my_smarty->render('admin','home');
        }



    }


    public function users_dashboard ()
    {
        if(isset($_SESSION["admin"] ) || isset($_COOKIE['remember'])) {

            $this->admin->table = 'users';
           // $this->smarty->assign('users', $this->admin->selectAll());
            $this->my_smarty->addParams('users', $this->admin->selectAll());
            //$this->smarty->display('../app/views/admin/users_dashboard.tpl');
            $this->my_smarty->render('admin','users_dashboard');
        }
        else {
            echo "<script>
            alert('Not logged in');
            window.location.href='/my_work/mvc/public/admin';
            </script>";
        }

    }

    public function delete ()
    {
        if(isset($_SESSION["admin"])  || isset($_COOKIE['remember'])) {

            $id = $_GET['id'];
            $this->admin->table = 'users';
            $this->admin->setWhere(array('id', $id));

            $this->admin->delete();

            //$this->smarty->assign('users', $this->admin->selectAll());
            $this->my_smarty->addParams('users', $this->admin->selectAll());
            $this->my_smarty->render('admin','users_dashboard');
          //  $this->smarty->display('../app/views/admin/users_dashboard.tpl');
            //$this->view('home/index' , ['users' => $this->user->selectAll()]);
        }else {
            echo "<script>
            alert('Not logged in');
            window.location.href='/my_work/mvc/public/admin';
            </script>";
        }

    }

    public function addUser()
    {
        if(isset($_SESSION["admin"])  || isset($_COOKIE['remember'])) {

           // $this->smarty->display('../app/views/admin/adduser.tpl');
            $this->my_smarty->render('admin','adduser');
        } else {
            echo "<script>
            alert('Not logged in');
            window.location.href='/my_work/mvc/public/admin';
            </script>";
        }
    }

    public function insert()
    {
        if(isset($_SESSION["admin"])  || isset($_COOKIE['remember'])) {

            $name = $_POST['name'];
            $pswd = $_POST['pswd'];
            $val_arr = array($name, $pswd);
            $this->admin->table = 'users';
            $this->admin->cols = array('name', 'pswd');
            $this->admin->vals = $val_arr;
            $this->admin->insert();
            $this->my_smarty->addParams('users', $this->admin->selectAll());
            //$this->smarty->assign('users', $this->admin->selectAll());
            $this->my_smarty->render('admin','users_dashboard');
           // $this->smarty->display('../app/views/admin/users_dashboard.tpl');
            //$this->view('home/index' , ['users' => $this->user->selectAll()]);

            /* $this->user->create([
                'name' => $name
            ]); */
        }
        else {
            echo "<script>
            alert('Not logged in');
            window.location.href='/my_work/mvc/public/admin';
            </script>";
        }
    }

    public function editUser ()
    {
        if(isset($_SESSION["admin"])  || isset($_COOKIE['remember'])) {

        $id = $_GET['id'];
        $this->admin->table = 'users';
        $this->admin->setWhere(array('id', $id));

            $this->my_smarty->addParams('user', $this->admin->where());
      //  $this->smarty->assign('user', $this->admin->where());
            $this->my_smarty->render('admin','edituser');
        //$this->smarty->display('../app/views/admin/edituser.tpl');
        //$this->view('home/editUser',['user' => $this->user->where()] );
        }
        else {
            echo "<script>
            alert('Not logged in');
            window.location.href='/my_work/mvc/public/admin';
            </script>";
        }

    }

    public function update ()
    {
        if(isset($_SESSION["admin"])  || isset($_COOKIE['remember'])) {


            $id = $_POST['id'];
            $name = $_POST['name'];
            $pswd = $_POST['pswd'];
            $val_arr = array($name, $pswd);
            $this->admin->table = 'users';
            $this->admin->setWhere(array('id', $id));
            $this->admin->cols = array('name', 'pswd');
            $this->admin->vals = $val_arr;
            $this->admin->update();

            $this->my_smarty->addParams('users', $this->admin->selectAll());
           // $this->smarty->assign('users', $this->admin->selectAll());
            $this->my_smarty->render('admin','users_dashboard');
          //  $this->smarty->display('../app/views/admin/users_dashboard.tpl');
            //$this->view('home/index' , ['users' => $this->user->selectAll()]);
        }
        else {
            echo "<script>
            alert('Not logged in');
            window.location.href='/my_work/mvc/public/admin';
            </script>";
        }

    }
}
