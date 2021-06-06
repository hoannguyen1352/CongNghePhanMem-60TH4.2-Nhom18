<?php
include_once('./models/User.php');
class userController
{
    public function login()
    {
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $result = User::login($_POST['username'],$_POST['password']);
            if($result)
                header('location:index.php');
            else
                $error ='Sai tài khoản hoặc mật khẩu';
        }
        include_once('./views/user/login.php');
    }
    public function logout()
    {
        User::logout();
        header('location:index.php?controller=user&action=login');
    }

    public function index()
    {
        if(User::isadmin())
        {
            $data=User::index();
            include_once('./views/user/index.php');
        }
    }

    public function add()
    {
        if(User::isadmin())
        {
            if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['phone']))
            {
                $result=User::insert($_POST['username'],$_POST['password'],$_POST['name'],$_POST['phone']);
                if($result)
                    header('location:index.php?controller=user&action=add&result=true');
                else
                    header('location:index.php?controller=user&action=add&result=false');               
            }
            include_once('./views/user/add.php');
        }
    }

    public function update()
    {
        if(isset($_GET['id']) && User::isadmin())
        {
            if(isset($_POST['name']) && isset($_POST['phone']) )
            {
                User::update($_GET['id'],$_POST['name'],$_POST['phone']);
                header('location:index.php?controller=user&action=update&id='.$_GET['id'].'&result=true');
            }
            $data=User::getuser($_GET['id']);
            include_once('./views/user/update.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    public function delete()
    {
        if(isset($_GET['id']) && User::isadmin())
        {
            User::delete($_GET['id']);
            header('location:index.php?controller=user');
        }
        else
        {
            header('location:index.php');
        }
    }

    public function password()
    {
        if(isset($_GET['id']) && User::isadmin())
        {
            if(isset($_POST['password1']) && isset($_POST['password2']) )
            {
                if($_POST['password1']==$_POST['password2'] && $_POST['password1']!="")
                {
                    User::password($_GET['id'],$_POST['password1']);
                    header('location:index.php?controller=user&action=password&id='.$_GET['id'].'&result=true');
                }
                else
                {
                    header('location:index.php?controller=user&action=password&id='.$_GET['id'].'&result=false');
                }        
            }
            $data=User::getuser($_GET['id']);
            include_once('./views/user/password.php');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>