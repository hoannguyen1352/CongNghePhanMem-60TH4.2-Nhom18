<?php
include_once('./config.php');
class Book
{
    public static function index($tbid){
        $query = "select books.did as id, @rownum:=@rownum+1 stt, name, number, price, number*price as total from drinks, books,(SELECT @rownum:=0) r where books.tbid = $tbid and drinks.id = books.did;";
        $result = getalldata($query);
        return $result;
    }
    
    public static function getone($tbid, $did){
        $query = "select * from books where tbid = $tbid and did = $did;";
        $result= getonedata($query);
        return $result;
    }

    public static function adddrink($tbid, $did, $number){
        $query="INSERT INTO books (tbid, did, number) VALUES ($tbid, $did, $number);";
        query($query);
    }

    public static function updatedrink($tbid, $did, $number){
        $query="update books set number = number + $number where tbid = $tbid and did = $did;";
        query($query);
    }

    public static function updateUpNumber($tbid, $did){
        $query="update books set number = number+1 where tbid = $tbid and did = $did;";
        query($query);
    }

    public static function updateDownNumber($tbid, $did){
        $query="update books set number = number-1 where tbid = $tbid and did = $did;";
        query($query);
    }

    public static function deletebook($tbid, $did){
        $query="DELETE FROM books WHERE tbid = $tbid and did = $did;";
        query($query);
    }

    public static function deleteAllBooks($tbid){
        $query="DELETE FROM books WHERE tbid = $tbid;";
        query($query);
    }
}

?>