<?php
include_once "controllers/WebControllers.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller = new WebControllers();
switch ($route){
    //list category
    case "Library":$controller->listBooks();break;

    default: $controller->Home();
}