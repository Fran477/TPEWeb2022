<?php require_once './Model/userModel.php'; require_once './View/loginView.php';

    class loginController{

        private $model;
        private $view;

        public function __construct(){
            
            
            $this->model = new userModel();
            $this->view = new loginView();}

        public function loginUser(){
            
            $this->view->loginUser();
        }

        
        
        public function verify(){
            
            if (!empty($_POST['name']) && !empty($_POST['password'])) {
            
                $name = $_POST['name'];
                $password = $_POST['password'];
                
                // Obtengo el usuario de la base de datos
                $user = $this->model->getUser($name);
                    
               
                    if ($user && password_verify($password, $user->password)) {
                        session_start();

                        $_SESSION["name"] = $name;

                        header("Location: " . BASE_URL);
                    }
                    else {
                        $this->view->loginUser('Tus datos son incorrectos, vuelve a intentarlo');

                    }

            }

        }

        public function logout(){
            session_start();
            session_destroy();
            header("Location: " . BASE_URL . "home");
        }


}