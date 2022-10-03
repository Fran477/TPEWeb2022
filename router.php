<?php
require_once './Controller/productController.php';
require_once './Controller/categoryController.php';
require_once './View/view404.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

$productController = new productController();
$categoryController = new categoryController();
$categoryController->showListCategories();
$view404 = new view404();

// tabla de ruteo
switch ($params[0]) {
    //<------ HOME -------->
    case 'home':
        $productController->showHome();
        break;
    //<------ redirecciona a los detalles de cada producto  -------->
    case 'detalles': 
        
        $productController->showDetail($params[1]);
    break;
    default:
        $view404->show404();
        break;
}
