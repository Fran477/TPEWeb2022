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


// tabla de ruteo
switch ($params[0]) {
    //<------ HOME -------->
    case 'home':
        $productController = new productController();
        $productController->showHome();
        break;
    //<------ redirecciona a los detalles de cada producto  -------->
    case 'detalles': 
        $productController = new productController();
        $productController->showDetail($params[1]);
    break;
    case 'admin':
        $adminController = new adminController();
        $adminController->showAdmin();
    break;
    case 'addProduct':
        $adminController = new adminController();
        $adminController->addProduct();
    break;
    case 'login':
        $loginController = new loginController();
        $loginController->loginUser();
    break;
    case 'loginVerify':
        $loginController = new loginController();
        $loginController->verify();
    break;
    case 'logout':
        $loginController = new loginController();
        $loginController->logout();
    break;
    case 'categoria':
        $categoryController = new categoryController();
        if(isset($params[1]))
        $categoryController->showCategory($params[1]);
        else 
        $categoryController->showCategories();
    break;
    case 'addCategory':
        $adminController = new adminController();
        $adminController->addCategory();
    break;
    default:
        $view404 = new view404();
        $view404->show404();
    break;
}
