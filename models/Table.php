<?php
include_once('./config.php');
class Table
{
    //lấy dữ liệu các bàn
    public static function index()
    {
        $query="select * from tables";
        $data=getalldata($query);
        return $data;
    }


    //thêm đồ uống vào bàn
    public static function adddrink(int $idtable ,int $iddrink,int $number)
    {
        
    }

    //xóa đồ uống của bàn
    public static function deletedrink(int $idtable )
    {
        
    }
}
?>