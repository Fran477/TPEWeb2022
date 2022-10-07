<?php

class userModel{

    private $db;

    function __construct(){

        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_product3d;charset=utf8', 'root', '');
    }

    function getUser($name){

        $query = $this->db->prepare('SELECT * FROM user WHERE name=?');
        $query->execute(array($name));
        $user =  $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}