<?php
include_once('./config.php');
class Bill
{
    public static function insert($cid, $tid){
        $query="INSERT INTO bills(cid, tid, date) VALUES ($cid,$tid,curdate())";
        query($query);
    }

    public static function insertNULL($tid){
        $query="INSERT INTO bills(tid, date) VALUES ($tid,curdate())";
        query($query);
    }

    public static function lastindex(){
        $query="SELECT * FROM bills ORDER BY id DESC LIMIT 1 ";
        $result=getonedata($query);
        return $result;
    }

}
?>