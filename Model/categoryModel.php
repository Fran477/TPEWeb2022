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
            
        $query = $this->db->prepare("SELECT * FROM category WHERE id=?");
        $query->execute(array($id));
        $category = $query->fetchAll(PDO::FETCH_OBJ);

        return $category;
    }

    public function getProductsByCategory($id){
        $query = $this->db->prepare("SELECT * FROM product WHERE id_category=?");
        $query->execute(array($id));
        $productsByCategory = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $productsByCategory;
    
    }
    
    function addCategory($name, $description){
        $query = $this->db->prepare("INSERT INTO category(name,description) VALUES (?,?)");
        $query->execute(array($name, $description));
    }



}