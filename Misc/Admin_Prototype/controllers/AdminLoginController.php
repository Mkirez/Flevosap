<?php
class AdminLoginController
{
    public function index()
    {
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            header("location:/dashboard");
            exit;
        }
        require 'views/login.view.php';
    }

    public function login(){
        // POST LOGIN
        $user =  new UserModel();
        $user->findByEmail($_POST['username']);
        if (password_verify($_POST['password'],$user->getPassword())){
            $_SESSION['loggedIn'] = true;
            $_SESSION['userId'] = $user->getId();
            header("location:/dashboard");
        } else {
            $_SESSION['login_incorrect'] = "Password or username not correct";
            header('location:/admin');
            require 'views/login.view.php';
        }
    }

}