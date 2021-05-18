<?php
include('./config.php');
class Tables
{
    public static function index()
    {
        $query="select * from tables";
        $data=getdata($query);
        return $data;
    }
}
?>