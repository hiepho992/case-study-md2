<?php
session_start();
// unset($_SESSION['cart']);
require_once "page/header.php";
require "./Controllers/BaseController.php";
$controllerName = ucfirst((strtolower($_REQUEST['controller'])?? 'Welcome').'Controller');
$actionName = $_REQUEST['action'] ?? 'index'; //check index dang mac dinh function index
require "./Controllers/${controllerName}.php";

$controllerObject = new $controllerName;

$controllerObject->$actionName();
require_once "page/footer.php";

?>