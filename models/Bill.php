<?php
include_once('./config.php');
class Bill
{
    public static function insert($cid, $tid){
        $query="INSERT INTO bills(cid, tid, date) VALUES ($cid,$tid,curdate())";
        if(query($query)) return true;
        else return false;
    }

    public static function lastindex(){
        $query="SELECT * FROM bills ORDER BY id DESC LIMIT 1 ";
        $result=getonedata($query);
        return $result;
    }

}
?>