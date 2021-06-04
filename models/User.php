<?php
include_once('./config.php');
class User
{
    //biến lưu username,name,level
    public static $username;
    public static $name;
    public static $level;

    //fuction check xem người dùng đã login chưa bằng cách lấy token từ session và check,sau đó lấy thông tin người dùng
    public static function isLogin()
    {
        if(!isset($_SESSION['token'])||$_SESSION['token']=='')
        {
            self::$username='';
            self::$name='';
            self::$level='';
            return false;
        }
        $token=$_SESSION['token'];
        $query="select * from accounts where token ='$token'";
        $data=getonedata($query);
        if($data)
        {
            self::$username=$data['username'];
            self::$name=$data['name'];
            self::$level=$data['level'];
            return true;
        }
        else
        {
            self::$username='';
            self::$name='';
            self::$level='';
            return false;
        }
    }
    
    //fuction login lưu token của người dùng vào session và trả về kết quả đăng nhập
    public static function login($username,$password)
    {
        $query="select * from accounts where username='$username' and password ='$password'";
        $data=getonedata($query);
        if($data)
        {
            $_SESSION['token']=$data['token'];
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public static function logout()
    {
        session_destroy();
    }
    
    public static function isadmin()
    {
        if(self::$level=='1')
            return true;
        else
            return false;
    }

    public static function index()
    {
        $query="select * from accounts";
        $data=getalldata($query);
        return $data;
    }

    public static function getuser($id)
    {
        $query="select * from accounts where id =$id";
        $data=getonedata($query);
        return $data;
    }

    public static function insert($username,$password,$name,$phone)
    {
        $token=rand_string(12);
        $query = "insert into accounts (username,password,token,name,phone) values('$username','$password','$token','$name','$phone')";
        $result=query($query);
        return $result;
    }

    public static function update($id,$name,$phone)
    {
        $query = "update accounts set name='$name',phone='$phone' where id=$id";
        $result=query($query);
        return $result;
    }

    public static function delete($id)
    {
        $username=self::$username;
        $query = "delete from accounts where id = $id and username !='$username'";
        $result=query($query);
        return $result;
    }

    public static function password($id,$password)
    {
        $query = "update accounts set password='$password' where id=$id";
        $result=query($query);
        return $result;
    }
}
?>