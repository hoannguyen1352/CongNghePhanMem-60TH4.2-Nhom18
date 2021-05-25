<?php
include_once('./config.php');
class Table
{

    public static function index()
    {
        $query="select * from tables";
        $data=getalldata($query);
        return $data;
    }

    public static function gettableinfor($idtable){
        $query = "select infor from tables where id =$idtable";
        $data = getonedata($query);
        return $data;
    }

    public static function status(){
        $query="select infor from tables";
        $data = getalldata($query);
        return $data;
    }
}
?>