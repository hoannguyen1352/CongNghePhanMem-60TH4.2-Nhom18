<?php
include_once('./models/Bill.php');
class billController
{
    public function index()
    {
        $data = Bill::index();
        include_once('./views/bill/index.php');
    }

    public function statistical()
    {
        $sum = 0;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
            if ($date1 <= $date2) {
                $data = Bill::statistical($date1, $date2);
                if($data['sum'] != NULL){
                    $sum = $data['sum'];
                }
            }
        }
        include_once('./views/bill/statistical.php');
    }
}
