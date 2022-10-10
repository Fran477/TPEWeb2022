<?php
    require_once "./libs/smarty-4.2.1/libs/Smarty.class.php";
    class categoryView{
        
        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }
        
        function showCategories($categories){
            $this->smarty->assign('categories', $categories);
            $this->smarty->display('templates/categories.tpl');
        }

        function showCategory($category, $productsByCategory){
            
            $this->smarty->assign('category', $category);
            $this->smarty->assign('productsByCategory',  $productsByCategory);
            $this->smarty->display('templates/category.tpl');

        }

        public function categoriesAdmin($error){
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/categoriesAdmin.tpl');
        }

        public function formAdminCategory($category, $error){
            $this->smarty->assign('error', $error);
            $this->smarty->assign('category', $category);
            $this->smarty->display('templates/formEditCategory.tpl');
        }

    }