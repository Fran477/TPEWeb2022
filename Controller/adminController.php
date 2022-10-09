<?php
require_once './Model/productModel.php';
require_once './View/productView.php';
require_once './View/view404.php';
require_once './Model/categoryModel.php';
require_once './Helpers/authHelper.php';
require_once './View/categoryView.php';

class adminController{
    private $model;
    private $view;
    private $modelCategory;
    private $authHelper;
    private $view404;
    private $viewCategory;

    public function __construct(){
        $this->model = new productsModel();
        $this->view = new productView();
        $this->view404 = new view404();
        $this->modelCategory = new categoryModel();
        $this->authHelper = new authHelper();
        $this->viewCategory = new categoryView();
    }
    
    public function showAdmin($error = null){

        $this->authHelper->checkloggedIn();
        $categories = $this->modelCategory->getCategories();
        $products= $this->model->getProducts();
        $this->view->admin($products, $categories, $error);
    }

    public function addProduct(){
       
        $this->authHelper->checkloggedIn();
        if(is_numeric($_POST['price']) && is_numeric($_POST['stock']) && !empty($_POST['name']) && !empty($_POST['type_filament']) && !empty($_POST['img']) && !empty($_POST['description']) && !empty($_POST['id_category'])){           
            
            $this->model->addProduct($_POST['name'],  $_POST['price'], $_POST['type_filament'] ,$_POST['stock'], $_POST['img'], $_POST['description'], $_POST['id_category']); 
            header("Location: " . BASE_URL . "admin");
        }
        else{
            $this->showAdmin("Se ingreso un dato no valido o ocurrio un error al cargar los datos."); 
        }
        
    }


    public function addCategory(){
       
        $this->authHelper->checkloggedIn();
        if(!empty($_POST['name']) && !empty($_POST['description'])){           
            
            $this->modelCategory->addCategory($_POST['name'], $_POST['description']); 
            header("Location: " . BASE_URL . "admin");
        }
        else{
            $this->showAdmin("Se ingreso un dato no valido o ocurrio un error al cargar los datos."); 
        }
        
    }

    public function deleteCategory($id){
        
        $this->authHelper->checkloggedIn();
        if(($this->modelCategory->getProductsByCategory($id)) == null){
            $this->modelCategory->deleteCategory($id);
            header("Location: " . BASE_URL . "admin");
        }
        else{
            
            $this->showAdmin("Se intento eliminar una categoria con productos asociados");
        }
        
    }
    public function deleteProduct($id){
        
        $this->authHelper->checkloggedIn();
        $this->model->deleteProduct($id);
        header("Location: " . BASE_URL . "admin");
        
    }
}          

