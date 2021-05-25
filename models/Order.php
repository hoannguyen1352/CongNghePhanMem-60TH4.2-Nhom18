<?php
include_once('./config.php');
class Order
{   
    public static function index(int $idtable){
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
    
    public static function infortable($iddrink){
        $query="select name, price from drinks where id = $iddrink";
        $data=getonedata($query);
        return $data;
    }

    // public static function bills(){
    //     $query="insert  into bills ";
    // }
}
?>