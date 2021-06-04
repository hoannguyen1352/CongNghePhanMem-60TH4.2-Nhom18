<?php
include_once('./config.php');
class Bill
{
    public static function index(){
        $query="SELECT bills.*, SUM(total) as sum FROM billdetail,bills WHERE id = bid GROUP BY bid";
        $result=getalldata($query);
        return $result;
    }

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

    public static function statistical($date1, $date2){
        $query="SELECT SUM(total) as sum from bills, billdetail WHERE id = bid AND date >= '$date1' AND date <= '$date2'";
        $result=getonedata($query);
        return $result;
    }

}
?>