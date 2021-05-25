<?php
include_once('./config.php');
class Drink
{
    //lấy dữ liệu tất cả đồ uống
    public static function index()
    {
        $query="select * from drinks";
        $data=getalldata($query);
        return $data;
    }

    //lấy dữ liệu của 1 đồ uống
    public static function getdrink($id)
    {
        $query="select * from drinks where id =$id";
        $data=getonedata($query);
        return $data;
    }

    //thêm đồ uống
    public static function insert($name,$price,$image,$note)
    {
        $query = "insert into drinks(name,price,image,note) values('$name','$price','$image','$note')";
        $result=query($query);
        return $result;
    }

    //sửa đồ uống
    public static function update($id,$name,$price,$image,$note)
    {
        $query = "update drinks set name='$name',price='$price',image='$image',note='$note' where id=$id";
        $result=query($query);
        return $result;
    }

    //xóa đồ uống
    public static function delete($id)
    {
        $query = "delete from drinks where id = $id";
        $result=query($query);
        return $result;
    }

    public static function infortable($iddrink){
        $query="select name, price from drinks where id = $iddrink";
        $data=getonedata($query);
        return $data;
    }
}
?>