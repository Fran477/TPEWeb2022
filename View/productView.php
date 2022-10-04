<?php
    require_once "./libs/smarty-4.2.1/libs/Smarty.class.php";
    class productView{
        
        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }
        
        function showHome($products){
            $this->smarty->assign('products', $products);
            $this->smarty->display('templates/home.tpl');

        }

        function showDetail($productDetail){
            $this->smarty->assign('productDetail', $productDetail);
            $this->smarty->display('templates/details.tpl');
  
        }

        function formAddProduct($categories){
            $this->smarty->assign('categories', $categories);
            $this->smarty->display('templates/formAdd.tpl');

        }

    }