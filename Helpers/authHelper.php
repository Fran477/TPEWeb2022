<?php

class authHelper
{

    function __construct(){
    
    }

    function checkloggedIn(){

        session_start();
        if (!isset($_SESSION["name"])) {
            header("Location: " . BASE_URL . "login");
        }
    }

    function logout(){
        session_start();
        session_destroy();
    }
}
