<?php
include_once('./models/User.php');
include_once('./assets/layouts/navbar.php');
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
        if(User::$level=='1')
        {
            $data=User::index();
        }
    }
}
?>