<?php
include_once('./models/Customers.php');
include_once('./models/User.php');
include_once('./assets/layouts/navbar.php');
class customersController
{
    public function index()
    {
        $data=Customers::index();
        include_once('./views/customers/index.php');
    }
    
    public function create()
    {
        include_once('./views/customers/create.php');
    }

    public function update()
    {
        $id=$_GET['id'];
        $data=Customers::showUpdate($id);
        include_once('./views/customers/update.php');
    }

    public function processCreate()
    {
        if(isset($_POST['name']) && isset($_POST['phone']))
        {
            $result = Customers::create($_POST['name'],$_POST['phone']);
            header('location:index.php?controller=customers&action=index');
        }
    }

    public function processUpdate()
    {
        if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['total']))
        {
            $result = Customers::update($_POST['id'],$_POST['name'],$_POST['phone'],$_POST['total']);
            header('location:index.php?controller=customers&action=index');
        }
    }
}
?>