<?php
include_once('./config.php');
class Customer
{
    public static function index()
    {
        $query="select * from customers";
        $data=getalldata($query);
        return $data;
    }

    public static function create(string $name, string $phone)
    {
        $query="INSERT INTO customers VALUES (NULL, '$name', '$phone', 0)" ;
        query($query); 
    }

    public static function showUpdate(int $id)
    {
        $query="select * from customers where id=$id";
        $data=getonedata($query);
        return $data;
    }

    public static function update(int $id, string $name, string $phone, int $total)
    {
        $query="UPDATE customers SET id='$id', name='$name', phone='$phone', total='$total' WHERE id = $id;";
        query($query); 
    }

    public static function updatetotal(int $cid, int $total)
    {
        $query="UPDATE customers SET total=total+$total WHERE id = $cid;";
        query($query); 
    }

    public static function delete(int $id)
    {
        $query="DELETE from customers WHERE id = $id";
        query($query); 
    }
}
?>