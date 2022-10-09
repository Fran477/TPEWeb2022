<?php
require_once './Model/productModel.php';
require_once './View/productView.php';
require_once './View/view404.php';



class productController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new productsModel();
        $this->view = new productView();
        $this->view404 = new view404();
    }

    public function showHome(){
        session_start();
        $products = $this->model->getProducts();
        $this->view->showHome($products);
    }
    
    
    public function showDetail($id){
        session_start();
        $productDetail = $this->model->getProduct($id);
        if(!empty($productDetail))
        $this->view->showDetail($productDetail);
        else
        $this->view404->show404();
    }

    //public function addProduct(){
    //    $this->model->addProduct("");
    //}


    
}