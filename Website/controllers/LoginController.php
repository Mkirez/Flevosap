<?php
class LoginController
{
    public function index()
    {
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            header("location: welcome.php");
            exit;
        }
        require 'views/login.view.php';
        unset($_SESSION['login_incorrect']);
    }

    public function login(){
        //POST LOGIN
        $user =  new UserModel();
        $user->findByEmail($_POST['username']);
        if (password_verify($_POST['password'],$user->getPassword())){
            $_SESSION['loggedIn'] = true;
            $_SESSION['userId'] = $user->getId();
        }else{
            $_SESSION['login_incorrect'] = "Password or username not correct";
            header('location: /login');
            require 'views/login.view.php';
        }
    }
}