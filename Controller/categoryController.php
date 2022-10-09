<?php
require_once './Model/categoryModel.php';
require_once './View/categoryView.php';

class categoryController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new categoryModel();
        $this->view = new categoryView();
    }

    public function showCategories(){
        session_start();
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }
    
    
    public function showCategory($name){
        session_start();
        $category = $this->model->getCategory($name);
        $productsByCategory = $this->model->getProductsByCategory($name);
        $this->view->showCategory($category, $productsByCategory);
    }

    


}