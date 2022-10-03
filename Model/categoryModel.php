<?php

class categoryModel{
    
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_product3d;charset=utf8', 'root', '');
    }

    function getCategories(){
            
        $query = $this->db->prepare("SELECT * FROM category");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ); 
        return $categories;
    }

    function getCategory($id){
            
        $query = $this->db->prepare("SELECT * FROM product WHERE id=?");
        $query->execute(array($id));
        $productDetail = $query->fetchAll(PDO::FETCH_OBJ);

        return $productDetail;
    }



}