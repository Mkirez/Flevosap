<?php
class LoginController
{
    public function index()
    {
        unset($_SESSION['login_incorrect']);
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            header("location: /admin");
            exit;
        }
        require 'views/login.view.php';
    }
    public function logout()
    {
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            unset($_SESSION['loggedIn']);
        }
        header("location: /");
        exit;
    }


    public function login(){
        // POST LOGIN
        $user =  new UserModel();
        $user->findByEmail($_POST['username']);
        if (password_verify($_POST['password'],$user->getPassword())){
            $_SESSION['loggedIn'] = true;
            $_SESSION['userId'] = $user->getId();
            header("location: /");
        } else {
            $_SESSION['login_incorrect'] = "Password or username not correct";
            header('location: /admin');
            require 'views/login.view.php';
        }
    }

}