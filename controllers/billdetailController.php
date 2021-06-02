<?php
include_once('./models/Billdetail.php');
class billdetailController
{
    public function read()
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data = Billdetail::select($id);
        }
        include_once('./views/billdetail/index.php');
    }
}
