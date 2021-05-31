<?php
include_once('./models/Book.php');
include_once('./models/Table.php');
include_once('./models/Drink.php');
include_once('./models/Bill.php');
include_once('./models/Billdetail.php');
include_once('./models/Customer.php');
class bookController
{
    public function show()
    {
        $dataDrinks = Drink::index();
        $id = $_GET['id'];
        $data1 = Table::getdata($id);
        $infortable = Book::index($id);
        $sum=0;
        if($infortable){
            foreach($infortable as $infor){
                $sum+=$infor['total'];
            }
        }
        else{
            Table::updatestatus($id,0);
        }
        include_once('./views/book/index.php');
    }

    public function adddrink(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $dataDrinks = Drink::index();
            $id = $_GET['id'];
            $data1 = Table::getdata($id);
            foreach($dataDrinks as $drinks){
                if($_POST[''.$drinks['id'].''] > 0){
                    $number = $_POST[''.$drinks['id'].''];
                    $getid = Book::getone($id, $drinks['id']);
                    if($getid){
                        Book::updatedrink($id, $drinks['id'], $number);
                    }
                    else{
                        Book::adddrink($id, $drinks['id'], $number);
                    }
                }
            }
            $infortable = Book::index($id);
            $sum=0;
            if($infortable){
                foreach($infortable as $infor){
                    $sum+=$infor['total'];
                }
                Table::updatestatus($id,1);
            }
        }
        include_once('./views/book/index.php');
    }

    public function updown()
    {
        $dataDrinks = Drink::index();
        $id = $_GET['id'];
        $data1 = Table::getdata($id);
        if(isset($_GET['didu'])){
            $didu = $_GET['didu'];
            Book::updateUpNumber($id, $didu);
        }
        else if(isset($_GET['didd'])){
            $didd = $_GET['didd'];
            $datadrink = Book::getone($id, $didd);
            if($datadrink['number'] == 1){
                Book::deletebook($id, $didd);
            }
            else{
                Book::updateDownNumber($id, $didd);
            }
        }
        $infortable = Book::index($id);
        $sum=0;
        if($infortable){
            foreach($infortable as $infor){
                $sum+=$infor['total'];
            }
        }
        else{
            Table::updatestatus($id,0);
        }
        include_once('./views/book/index.php');
    }

    public function delete()
    {
        $dataDrinks = Drink::index();
        $id = $_GET['id'];
        $data1 = Table::getdata($id);
        $did = $_GET['did'];
        Book::deletebook($id, $did);
        $infortable = Book::index($id);
        $sum=0;
        if($infortable){
            foreach($infortable as $infor){
                $sum+=$infor['total'];
            }
        }
        else{
            Table::updatestatus($id,0);
        }
        include_once('./views/book/index.php');
    }

    public function confirm()
    {
        $id = $_GET['id'];
        $cid = $_POST['cid'];
        $infortable = Book::index($id);
        $sum=0;
        foreach($infortable as $infor){
            $sum+=$infor['total'];
        }
        $sale = 0;
        if ($cid == "") $cid = 'NULL';
        if ($cid != 0) {
            if(Customer::showUpdate($cid)){
            $inforCustomer = Customer::showUpdate($cid);
            if ($inforCustomer['total'] >= 5000000) $sale = (int)$sum * 0.08;
            if ($inforCustomer['total'] >= 8000000) $sale = (int)$sum * 0.1;
            if ($inforCustomer['total'] >= 10000000) $sale = (int)$sum * 0.12;
            $sale = (float)$sale / 1000;
            $sale = round($sale) * 1000;
            $totalpay = $sum - $sale;
            }
            else{
                $cid = 'NULL';
                $totalpay = $sum - $sale;
            }
        }
        else $totalpay = $sum - $sale;
        include_once('./views/book/confirm.php');
    }

    public function pay(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_GET['id'];
            $cid = $_GET['cid'];
            $total = $_POST['totalpay'];
            $infortable = Book::index($id);
            if($cid != 'NULL'){
                Bill::insert($cid, $id);
            }
            else Bill::insertNULL($id);
            //$billdata = Bill::lastindex();
            //foreach($infortable as $tabledata){
            //    Billdetail::insert($billdata['id'],$tabledata['id'], $tabledata['number'], $tabledata['total']);
            //}
            if($cid != 'NULL'){
                Customer::updatetotal($cid,$total);
            }
            Book::deleteAllBooks($id);
            Table::updatestatus($id,0);
            header('location:index.php');
        }
    }
}
