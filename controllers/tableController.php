<?php
include_once('./models/Table.php');
include_once('./models/Drink.php');
include_once('./models/Bill.php');
include_once('./models/Billdetail.php');
class tableController
{
    public function index()
    {
        $data = Table::index();
        include_once('./views/table/index.php');
    }

    public function order()
    {
        $data = Drink::index();
        $id = $_GET['id'];
        $data1 = Table::getdata($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tableinfor = Table::gettableinfor($id);
            $tableinfor = json_decode($tableinfor['infor'], true);
            foreach ($data as $drinks) {
                $tableinfor['' . $drinks["id"] . ''] = $tableinfor['' . $drinks["id"] . ''] + $_POST['' . $drinks["id"] . ''];
            }
            $drink[1] = NULL;
            $j = 1;
            $sum = 0;
            for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
                if ($tableinfor['' . $i . ''] > 0) {
                    $infor = Drink::getdrink($i);
                    $drink[$j]['id'] = $i;
                    $drink[$j]['stt'] = $j;
                    $drink[$j]['ten'] = $infor['name'];
                    $drink[$j]['soluong'] = $tableinfor['' . $i . ''];
                    $drink[$j]['gia'] = $infor['price'];
                    $drink[$j]['thanhtien'] = $infor['price'] * $tableinfor['' . $i . ''];
                    $sum = $sum + $drink[$j]['thanhtien'];
                    $j += 1;
                }
            }
            if ($j != 1) {
                $tableinfor = json_encode($tableinfor);
                Table::update($id, 1, $tableinfor);
            }
        } else {
            $tableinfor = Table::gettableinfor($id);
            $tableinfor = json_decode($tableinfor['infor'], true);
            $drink[1] = NULL;
            $j = 1;
            $sum = 0;
            for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
                if ($tableinfor['' . $i . ''] > 0) {
                    $infor = Drink::getdrink($i);
                    $drink[$j]['id'] = $i;
                    $drink[$j]['stt'] = $j;
                    $drink[$j]['ten'] = $infor['name'];
                    $drink[$j]['soluong'] = $tableinfor['' . $i . ''];
                    $drink[$j]['gia'] = $infor['price'];
                    $drink[$j]['thanhtien'] = $infor['price'] * $tableinfor['' . $i . ''];
                    $sum = $sum + $drink[$j]['thanhtien'];
                    $j += 1;
                }
            }
        }
        include_once('./views/table/order.php');
    }

    public function delete()
    {
        $data = Drink::index();
        $idtb = $_GET["idtb"];
        $idd = $_GET["idd"];
        $data1 = Table::getdata($idtb);
        $tableinfor = Table::gettableinfor($idtb);
        $tableinfor = json_decode($tableinfor['infor'], true);
        $tableinfor['' . $idd . ''] = 0;
        $drink[1] = NULL;
        $j = 1;
        $sum = 0;
        for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
            if ($tableinfor['' . $i . ''] > 0) {
                $infor = Drink::infortable($i);
                $drink[$j]['id'] = $i;
                $drink[$j]['stt'] = $j;
                $drink[$j]['ten'] = $infor['name'];
                $drink[$j]['soluong'] = $tableinfor['' . $i . ''];
                $drink[$j]['gia'] = $infor['price'];
                $drink[$j]['thanhtien'] = $infor['price'] * $tableinfor['' . $i . ''];
                $sum = $sum + $drink[$j]['thanhtien'];
                $j += 1;
            }
        }
        if ($j != 1) {
            $tableinfor = json_encode($tableinfor);
            Table::update($idtb, 1, $tableinfor);
        } else {
            $tableinfor = json_encode($tableinfor);
            Table::update($idtb, 0, $tableinfor);
        }
        include_once('./views/table/order.php');
    }
    public function updown()
    {
        $data = Drink::index();
        $idtb = $_GET["idtb"];
        $data1 = Table::getdata($idtb);
        if (isset($_GET["iddu"])) {
            $idd = $_GET["iddu"];
            $tableinfor = Table::gettableinfor($idtb);
            $tableinfor = json_decode($tableinfor['infor'], true);
            $tableinfor['' . $idd . ''] = $tableinfor['' . $idd . ''] + 1;
            $drink[1] = NULL;
            $j = 1;
            $sum = 0;
            for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
                if ($tableinfor['' . $i . ''] > 0) {
                    $infor = Drink::infortable($i);
                    $drink[$j]['id'] = $i;
                    $drink[$j]['stt'] = $j;
                    $drink[$j]['ten'] = $infor['name'];
                    $drink[$j]['soluong'] = $tableinfor['' . $i . ''];
                    $drink[$j]['gia'] = $infor['price'];
                    $drink[$j]['thanhtien'] = $infor['price'] * $tableinfor['' . $i . ''];
                    $sum = $sum + $drink[$j]['thanhtien'];
                    $j += 1;
                }
            }
            $tableinfor = json_encode($tableinfor);
            Table::update($idtb, 1, $tableinfor);
        } else if (isset($_GET["iddd"])) {
            $idd = $_GET["iddd"];
            $tableinfor = Table::gettableinfor($idtb);
            $tableinfor = json_decode($tableinfor['infor'], true);
            $tableinfor['' . $idd . ''] = $tableinfor['' . $idd . ''] - 1;
            $drink[1] = NULL;
            $j = 1;
            $sum = 0;
            for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
                if ($tableinfor['' . $i . ''] > 0) {
                    $infor = Drink::infortable($i);
                    $drink[$j]['id'] = $i;
                    $drink[$j]['stt'] = $j;
                    $drink[$j]['ten'] = $infor['name'];
                    $drink[$j]['soluong'] = $tableinfor['' . $i . ''];
                    $drink[$j]['gia'] = $infor['price'];
                    $drink[$j]['thanhtien'] = $infor['price'] * $tableinfor['' . $i . ''];
                    $sum = $sum + $drink[$j]['thanhtien'];
                    $j += 1;
                }
            }
            if ($j != 1) {
                $tableinfor = json_encode($tableinfor);
                Table::update($idtb, 1, $tableinfor);
            } else {
                $tableinfor = json_encode($tableinfor);
                Table::update($idtb, 0, $tableinfor);
            }
        }

        include_once('./views/table/order.php');
    }

    public function pay()
    {
        $data = Drink::index();
        $id = $_GET["id"];
        $data1 = Table::getdata($id);
        $tableinfor = Table::gettableinfor($id);
        $tableinfor = json_decode($tableinfor['infor'], true);
        $drink[1] = NULL;
        $j = 1;
        $sum = 0;
        $sale = 0;
        for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
            if ($tableinfor['' . $i . ''] > 0) {
                $infor = Drink::infortable($i);
                $drink[$j]['id'] = $i;
                $drink[$j]['stt'] = $j;
                $drink[$j]['ten'] = $infor['name'];
                $drink[$j]['soluong'] = $tableinfor['' . $i . ''];
                $drink[$j]['gia'] = $infor['price'];
                $drink[$j]['thanhtien'] = $infor['price'] * $tableinfor['' . $i . ''];
                $sum = $sum + $drink[$j]['thanhtien'];
                $j += 1;
            }
        }
        $total = $sum - $sale;
        if ($j == 1) {
            include_once('./views/table/order.php');
        } elseif ($j > 1) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $cid = $_POST['cid'];
                if ($cid == "") $cid = -1;
                Bill::insert($cid, $id);
                $billdata = Bill::lastindex();
                for ($i = 1; $i < $j; $i += 1) {
                    Billdetail::insert($billdata['id'], $drink[$i]['id'], $drink[$i]['soluong'], $drink[$i]['thanhtien']);
                }
                for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
                    $tableinfor['' . $i . ''] = 0;
                }
                $tableinfor = json_encode($tableinfor);
                Table::update($id, 0, $tableinfor);
                include_once('./views/table/confirm.php');
            }
        }
    }
}
