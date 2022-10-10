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
        $pathImg = $this->uploadImage($img);
        $query = $this->db->prepare("INSERT INTO product(name,price,type_filament,stock,img,description,id_category) VALUES (?,?,?,?,?,?,?)");
        $query->execute(array($name,$price,$type_filament,$stock, $pathImg, $description, $id_category));
    }

    function deleteProduct($id){
        $query = $this->db->prepare("DELETE FROM product WHERE id=?");
        $query->execute(array($id));
    }

    private function uploadImage($image){
        $target = 'img/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }
    public function editProduct($name,$price, $type_filament,$stock, $img, $description, $id_category, $id){
        $query = $this->db->prepare("UPDATE product SET name=?,  price=?, type_filament=?, stock=?, img=?, description=?, id_category=?  WHERE id=?");
        $query->execute(array($name,$price, $type_filament,$stock, $img, $description, $id_category, $id));
    }


}