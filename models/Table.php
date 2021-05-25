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

    public static function getdata(int $idtable){
        $query="select * from tables where id = $idtable";
        $data=getonedata($query);
        return $data;
    }
    
    public static function update($idtable, $status, $infor){
        $query="update tables set  status = $status, infor = '$infor' where id = $idtable";
        query($query);
    }

    public static function updateinfor($idtable, $infor){
        $query="update tables set infor = '$infor' where id = $idtable";
        query($query);
    }
}
?>