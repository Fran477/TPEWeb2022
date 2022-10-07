<?php

class productsModel{
    
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_product3d;charset=utf8', 'root', '');
    }

    function getProducts(){
            
        $query = $this->db->prepare("SELECT * FROM product ");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ); 
        return $products;
    }

    function getProduct($id){
            
        $query = $this->db->prepare("SELECT * FROM product WHERE id=?");
        $query->execute(array($id));
        $productDetail = $query->fetchAll(PDO::FETCH_OBJ);

        return $productDetail;
    }

    function addProduct($name,$price,$type_filament,$stock, $img, $description, $id_category){
        $query = $this->db->prepare("INSERT INTO product(name,price,type_filament,stock,img,description,id_category) VALUES (?,?,?,?,?,?,?)");
        $query->execute(array($name,$price,$type_filament,$stock, $img, $description, $id_category));
    }



}