<?php
include_once('./models/Drink.php');
include_once('./models/User.php');
include_once('./assets/layouts/adminnavbar.php');
class drinkController
{
    //hiển thị form quản lý đồ uống
    public function index()
    {
        $data=Drink::index();
        // include_once('./views/drink/index.php');
    }

    //thêm 1 đồ uống
    public function add()
    {

    }

    //sửa 1 đồ uống
    public function update()
    {

    }

    //xóa 1 đồ uống
    public function delete()
    {
        
    }
}
?>