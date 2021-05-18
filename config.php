<?php
//Khai báo các thông tin của cơ sở dữ liệu

define('dbhost','localhost');
define('dbuser','root');
define('dbpass', '');
define('dbname','cafe');

//khai báo các thông tin của hàm truy vấn đến database
//biến chứa kết nối database
$connect;

//hàm connect
function connect()
{
    global $connect;
    $connect=mysqli_connect(dbhost,dbuser,dbpass,dbname);
    $connect->set_charset("utf8");
}

//hàm disconnect
function disconnect()
{
    global $connect;
    mysqli_close($connect);
}

//hàm chạy query
function query($query)
{
    global $connect;
    connect();
    mysqli_query($connect,$query);
    disconnect();
}

//hàm chạy query và trả về kết quả
function getdata($query)
{
    global $connect;
    connect();
    $result=mysqli_query($connect,$query);
    disconnect();
    if(mysqli_num_rows($result)>0)
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    else
        return false;
}
?>