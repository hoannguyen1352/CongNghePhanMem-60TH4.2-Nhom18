<?php
include_once('./models/Table.php');
include_once('./models/Drink.php');
include_once('./models/Bill.php');
include_once('./models/Billdetail.php');
include_once('./models/Customer.php');
class tableController
{
    public function index()
    {
        $data = Table::index();
        include_once('./views/table/index.php');
    }
}
