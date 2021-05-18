<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'table';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : -1;


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
?>