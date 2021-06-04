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
    $connect= mysqli_connect(dbhost,dbuser,dbpass,dbname);
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
    $result=mysqli_query($connect,$query);
    disconnect();
    return $result;
}

//hàm chạy query và trả về tất cả kết quả
function getalldata($query)
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

//hàm chạy query và trả về 1 kết quả
function getonedata($query)
{
    global $connect;
    connect();
    $result=mysqli_query($connect,$query);
    disconnect();
    if($result&&mysqli_num_rows($result)==1)
        return mysqli_fetch_assoc($result);
    else
        return false;
}

function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str='';
    $size = strlen( $chars );
    for( $i = 0; $i < $length; $i++ ) {
    $str .= $chars[ rand( 0, $size - 1 ) ];
     }
    return $str;
    }
?>