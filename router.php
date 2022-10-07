<?php
require_once './Controller/productController.php';
require_once './Controller/categoryController.php';
require_once './View/view404.php';
require_once './Controller/adminController.php';
require_once './Controller/loginController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

$productController = new productController();
$categoryController = new categoryController();
$view404 = new view404();
$adminController = new adminController();
$loginController = new loginController();


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
    case 'admin':
        $adminController->showAdmin();
    break;
    case 'addProduct':
        $adminController->addProduct();
    break;
    case 'login':
        $loginController->loginUser();
    break;
    case 'loginVerify':
        $loginController->verify();
    break;
    case 'categoria':
        if(isset($params[1]))
        $categoryController->showCategory($params[1]);
        else 
        $categoryController->showCategories();
    break;
    default:
        $view404->show404();
    break;
}
