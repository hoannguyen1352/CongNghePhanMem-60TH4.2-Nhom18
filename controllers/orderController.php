<?php
include_once('./models/Drink.php');
include_once('./models/Order.php');
include_once('./models/Table.php');
class orderController
{
    public function order()
    {
        $data = Drink::index();
        $id = $_GET['id'];
        $data1 = Order::index($id);
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
                    $infor = Order::infortable($i);
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
                Order::update($id, 1, $tableinfor);
            }
        } else {
            $tableinfor = Table::gettableinfor($id);
            $tableinfor = json_decode($tableinfor['infor'], true);
            $drink[1] = NULL;
            $j = 1;
            $sum = 0;
            for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
                if ($tableinfor['' . $i . ''] > 0) {
                    $infor = Order::infortable($i);
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
        include_once('./views/order/index.php');
    }

    public function delete()
    {
        $data = Drink::index();
        $idtb = $_GET["idtb"];
        $idd = $_GET["idd"];
        $data1 = Order::index($idtb);
        $tableinfor = Table::gettableinfor($idtb);
        $tableinfor = json_decode($tableinfor['infor'], true);
        $tableinfor['' . $idd . ''] = 0;
        $drink[1] = NULL;
        $j = 1;
        $sum = 0;
        for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
            if ($tableinfor['' . $i . ''] > 0) {
                $infor = Order::infortable($i);
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
            Order::update($idtb, 1, $tableinfor);
        } else {
            $tableinfor = json_encode($tableinfor);
            Order::update($idtb, 0, $tableinfor);
        }
        include_once('./views/order/index.php');
    }
    public function updown()
    {
        $data = Drink::index();
        $idtb = $_GET["idtb"];
        $data1 = Order::index($idtb);
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
                    $infor = Order::infortable($i);
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
            Order::update($idtb, 1, $tableinfor);
        }
        else if(isset($_GET["iddd"])){
            $idd = $_GET["iddd"];
            $tableinfor = Table::gettableinfor($idtb);
            $tableinfor = json_decode($tableinfor['infor'], true);
            $tableinfor['' . $idd . ''] = $tableinfor['' . $idd . ''] - 1;
            $drink[1] = NULL;
            $j = 1;
            $sum = 0;
            for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
                if ($tableinfor['' . $i . ''] > 0) {
                    $infor = Order::infortable($i);
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
                Order::update($idtb, 1, $tableinfor);
            } else {
                $tableinfor = json_encode($tableinfor);
                Order::update($idtb, 0, $tableinfor);
            }
        }

        include_once('./views/order/index.php');
    }

    public function pay(){
        $data = Drink::index();
        $id = $_GET["id"];
        $data1 = Order::index($id);
        $tableinfor = Table::gettableinfor($id);
        $tableinfor = json_decode($tableinfor['infor'], true);
        $drink[1] = NULL;
        $j = 1;
        $sum = 0;
        for ($i = 1; $i <= sizeof($tableinfor); $i += 1) {
            if ($tableinfor['' . $i . ''] > 0) {
                $infor = Order::infortable($i);
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
        if($j == 1){ include_once('./views/order/index.php'); }
        elseif($j >1 ){
            
        }
    }
}
