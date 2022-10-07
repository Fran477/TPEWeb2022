<?php

class loginView{

    private $smarty;

    function __construct(){

        $this->smarty = new Smarty();
    }


    function loginUser($decline = null){

        $this->smarty->assign('decline', $decline );
        $this->smarty->display('templates/login.tpl');
    }

    function showHome(){

        header("Location: " . BASE_URL . "admin");
        
    }
}