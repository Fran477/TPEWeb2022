<?php
require_once './Model/productModel.php';
require_once './View/productView.php';
require_once './View/view404.php';
require_once './Model/categoryModel.php';

class adminController{
    private $model;
    private $view;
    private $modelCategory;

    public function __construct(){
        $this->model = new productsModel();
        $this->view = new productView();
        $this->view404 = new view404();
        $this->modelCategory = new categoryModel();
    }
    
    public function showAdmin(){
        $categories = $this->modelCategory->getCategories();
        $this->view->formAddProduct($categories);
    }

}