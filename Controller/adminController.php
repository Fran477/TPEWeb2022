<?php
require_once './Model/productModel.php';
require_once './View/productView.php';
require_once './View/view404.php';
require_once './Model/categoryModel.php';
require_once './Helpers/authHelper.php';

class adminController{
    private $model;
    private $view;
    private $modelCategory;
    private $authHelper;
    private $view404;

    public function __construct(){
        $this->model = new productsModel();
        $this->view = new productView();
        $this->view404 = new view404();
        $this->modelCategory = new categoryModel();
        $this->authHelper = new authHelper();
    }
    
    public function showAdmin($error = null){

        $this->authHelper->checkloggedIn();
        $categories = $this->modelCategory->getCategories();
        $this->view->admin($categories, $error);
    }

    public function addProduct(){
        if(is_numeric($_POST['price']) && is_numeric($_POST['stock']) && !empty($_POST['name']) && !empty($_POST['type_filament']) && !empty($_POST['img']) && !empty($_POST['description']) && !empty($_POST['id_category'])){           
            
            $this->model->addProduct($_POST['name'],  $_POST['price'], $_POST['type_filament'] ,$_POST['stock'], $_POST['img'], $_POST['description'], $_POST['id_category']); 
            header("Location: " . BASE_URL . "admin");
        }
        else{
            $this->showAdmin("Se ingreso un dato no valido o ocurrio un error al cargar los datos."); 
        }
        
    }


    public function addCategory(){
        if(!empty($_POST['name']) && !empty($_POST['description'])){           
            
            $this->modelCategory->addCategory($_POST['name'], $_POST['description']); 
            header("Location: " . BASE_URL . "admin");
        }
        else{
            $this->showAdmin("Se ingreso un dato no valido o ocurrio un error al cargar los datos."); 
        }
        
    }



    



}