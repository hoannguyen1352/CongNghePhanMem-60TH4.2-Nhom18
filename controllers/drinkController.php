<?php
include_once('./models/User.php');
include_once('./models/Drink.php');
class drinkController
{
    //hiển thị form quản lý đồ uống
    public function index()
    {
        if(User::isadmin())
        {
            $data=Drink::index();
            include_once('./views/drink/index.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    //thêm 1 đồ uống
    public function add()
    {
        if(User::isadmin())
        {
            if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['note']))
            {
                if(isset($_FILES['image']) && (($_FILES["image"]["type"] == "image/gif")
                || ($_FILES["image"]["type"] == "image/jpeg")
                || ($_FILES["image"]["type"] == "image/png")
                || ($_FILES["image"]["type"] == "image/pjpeg")))
                {
                    $extension = explode(".", $_FILES["image"]["name"]);
                    $extension = end($extension);
                    $image="./assets/image/". $_FILES["image"]["name"].".".$extension;
                    move_uploaded_file($_FILES["image"]["tmp_name"],$image);
                }
                else
                {
                    $image="./assets/image/all.JPG";
                }
                Drink::insert($_POST['name'],$_POST['price'],$image,$_POST['note']);
                header('location:index.php?controller=drink&action=add&result=true');
            }
            include_once('./views/drink/add.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    //sửa 1 đồ uống
    public function update()
    {
        if(isset($_GET['id']) && User::isadmin())
        {
            if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['note']))
            {
                if(isset($_FILES['image']) && (($_FILES["image"]["type"] == "image/gif")
                || ($_FILES["image"]["type"] == "image/jpeg")
                || ($_FILES["image"]["type"] == "image/png")
                || ($_FILES["image"]["type"] == "image/pjpeg")))
                {
                    $extension = explode(".", $_FILES["image"]["name"]);
                    $extension = end($extension);
                    $image="./assets/image/". $_GET['id'].".".$extension;
                    move_uploaded_file($_FILES["image"]["tmp_name"],$image);
                }
                else
                {
                    $image=$_POST['image'];
                }
                Drink::update($_GET['id'],$_POST['name'],$_POST['price'],$image,$_POST['note']);
                header('location:index.php?controller=drink&action=update&id='.$_GET['id'].'&result=true');
            }
            $data=Drink::getdrink($_GET['id']);
            include_once('./views/drink/update.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    //xóa 1 đồ uống
    public function delete()
    {
        if(isset($_GET['id']) && User::isadmin())
        {
            Drink::delete($_GET['id']);
            header('location:index.php?controller=drink');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>