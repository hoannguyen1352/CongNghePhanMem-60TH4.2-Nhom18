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

    public static function getdata(int $idtable){
        $query="select * from tables where id = $idtable";
        $data=getonedata($query);
        return $data;
    }

    public static function updatestatus($idtable, $status){
        $query="update tables set status = $status where id = $idtable";
        query($query);
    }

    public static function create()
    {
        $query="INSERT INTO tables VALUES (NULL, NULL, 0)" ;
        query($query); 
    }

    public static function delete(int $id)
    {
        $query="DELETE from tables WHERE id = $id";
        query($query);
    }
}
?>