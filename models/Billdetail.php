<?php
include_once('./config.php');
class Billdetail
{
    public static function insert($bid, $did, $number, $total){
        $query="insert into billdetail(bid, did, number, total) values ($bid,$did,$number,$total)";
        query($query);
    }

    public static function select($id){
        $query="SELECT did,name,number,price,total FROM billdetail, drinks WHERE did = id AND bid=$id";
        $result = getalldata($query);
        return $result;
    }
}
?>