<?php
include_once('./models/Customer.php');
include_once('./models/User.php');
class customerController
{
    public function index()
    {
        $data=Customer::index();
        include_once('./views/customer/index.php');
    }
    
    public function create()
    {
        include_once('./views/customer/create.php');
    }

    public function update()
    {
        $id=$_GET['id'];
        $data=Customer::showUpdate($id);
        include_once('./views/customer/update.php');
    }

    public function processCreate()
    {
        if(isset($_POST['name']) && isset($_POST['phone']))
        {
            $result = Customer::create($_POST['name'],$_POST['phone']);
            header('location:index.php?controller=customer&action=index');
        }
    }

    public function processUpdate()
    {
        if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['total']))
        {
            $result = Customer::update($_POST['id'],$_POST['name'],$_POST['phone'],$_POST['total']);
            header('location:index.php?controller=customer&action=index');
        }
    }
    
    public function delete()
    {
        if(User::isadmin())
        {
            $id=$_GET['id'];
            $result = Customer::delete($id);
            header('location:index.php?controller=customer&action=index');
        }
        else
        {
            header('location:index.php?controller=customer&action=index');
        }
    }
}
?>