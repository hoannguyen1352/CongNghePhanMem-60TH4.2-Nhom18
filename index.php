<?php
session_start();
include_once('./assets/layouts/header.php');
include_once('models/User.php');
include_once('./assets/layouts/navbar.php');

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'table';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
if($controller!='user' && $action !='login' && !User::isLogin())
    header('location:index.php?controller=user&action=login');
$pathcontroller= 'controllers/'.$controller.'Controller.php';
if (!file_exists($pathcontroller)) {
    die("Trang bạn tìm không tồn tại");
}
require_once($pathcontroller);
$classController = $controller."Controller";
$object = new $classController();
if (!method_exists($object, $action)) {
    die("Phương thức $action không tồn tại trong class $classController");
}
$object->$action();
include_once('./assets/layouts/footer.php');
?>