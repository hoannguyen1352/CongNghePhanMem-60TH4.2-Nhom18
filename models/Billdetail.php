<?php
include_once('./config.php');
class Billdetail
{
    public static function insert($bid, $did, $number, $total){
        $query="insert into billdetail(bid, did, number, total) values ($bid,$did,$number,$total)";
        if(query($query)) return true;
        return false;
    }
}
?>