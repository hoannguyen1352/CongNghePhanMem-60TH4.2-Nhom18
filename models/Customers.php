<?php
include_once('./config.php');
class Customers
{
    public static function index()
    {
        $query="select * from customers";
        $data=getalldata($query);
        return $data;
    }

    public static function create(int $id, string $name, string $phone, int $total)
    {
        $query="INSERT INTO customers VALUES ('$id', '$name', '$phone', '$total')" ;
        query($query); 
    }

    public static function update(int $id)
    {
        $query="select * from customers where id=$id";
        $data=getonedata($query);
        return $data;
    }
}
?>