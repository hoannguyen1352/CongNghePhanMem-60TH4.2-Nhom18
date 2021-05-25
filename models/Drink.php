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
    }

    //sửa đồ uống
    public static function update($id,$name,$price,$imame,$note)
    {
        
    }

    //xóa đồ uống
    public static function delete($id)
    {
        
    }
}
?>