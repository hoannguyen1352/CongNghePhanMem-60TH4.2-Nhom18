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
    public static function adddrink(int $idtable ,int $iddrink,int $number)
    {
        
    }
}
?>