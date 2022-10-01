<?php
require_once './Model/productModel.php';
require_once './View/productView.php';

class productController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new productsModel();
        $this->view = new productView();
    }

    public function showHome(){
        $products = $this->model->getProducts();
        $this->view->showHome($products);
    }
}