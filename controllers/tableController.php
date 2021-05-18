<?php
include_once('./models/Tables.php');
class tableController
{
    public function index()
    {
        $data=Tables::index();
        include_once('./views/table/index.php');
    }
}
?>