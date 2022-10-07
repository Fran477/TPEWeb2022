<?php require_once './Model/userModel.php'; require_once './View/loginView.php';

    class loginController{

        private $model;
        private $view;

        function __construct(){
            
            
            $this->model = new userModel();
            $this->view = new loginView();}

        function loginUser(){
            
            $this->view->loginUser();
        }

        
        
        function verify(){
            
            if (!empty($_POST['name']) && !empty($_POST['password'])) {
            
                $name = $_POST['name'];
                $password = $_POST['password'];
                
                // Obtengo el usuario de la base de datos
                $user = $this->model->getUser($name);
                    
                    // Si el usuario existe y las contraseñas coinciden
                    if ($name && password_verify($password, $user->password)) {
                        session_start();

                        $_SESSION["name"] = $name;

                        $this->view->showHome();
                    }
                    else {
                        $this->view->loginUser('Tus datos son incorrectos, vuelve a intentarlo');
                    }
                }
        }

        function logout(){
            
            session_start();
            session_destroy();
            $this->view->loginUser("Adios :)");}


}