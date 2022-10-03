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

    public function showListCategories(){
        $categories = $this->model->getCategories();
        $this->view->showListCategories($categories);
    }
    
    
    public function showDetailCategory($id){
        $categoryDetail = $this->model->getCategory($id);
        $this->view->showDetail($categoryDetail);
    }

    
}