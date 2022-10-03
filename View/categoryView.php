<?php
    require_once "./libs/smarty-4.2.1/libs/Smarty.class.php";
    class categoryView{
        
        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }
        
        function showListCategories($categories){
            $this->smarty->assign('categories', $categories);
            $this->smarty->display('templates/header.tpl');
        }

        function showDetail($productDetail){
            $this->smarty->assign('productDetail', $productDetail);
            $this->smarty->display('templates/details.tpl');
        }

    }