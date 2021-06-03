<?php
include_once('./models/Table.php');
class tableController
{
    public function index()
    {
        $data = Table::index();
        include_once('./views/table/index.php');
    }
    
    public function create()
    {
        if(User::isadmin())
        {
            $result = Table::create();
            header('location:index.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    public function delete()
    {
        if(User::isadmin())
        {
            $id=$_GET['id'];
            $result = Table::delete($id);
            header('location:index.php');
        }
        else
        {
            header('location:index.php');
        }
    }
}
