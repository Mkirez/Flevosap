<?php
class LoginController
{
    public function index()
    {
        unset($_SESSION['login_incorrect']);
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            header("location:/");
            exit;
        }
        require 'views/login.view.php';
    }
    public function logout()
    {
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            unset($_SESSION['loggedIn']);
        }
        header("location: /login");
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
            header('location: /login');
            require 'views/login.view.php';
        }
    }

    Public function login3(){

        $user =  new UserModel();
       
            
            if($user->findByName($_POST['username'])){
                 

                 //check het wachtwoord
                 $wachtwoord=$user->getPassword();
                // echo $wachtwoord;exit;
                 if(password_verify($_POST['password'],$user->getPassword())){
                    //Alles is OK! Zowel het wachtwoord als de inlognaam
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['userId'] = $user->getId();
                    header("location: /");


                 }else {
                    //De inlognaam is juis maar het wachtwoord is niet ok
                    $_SESSION['login_incorrect'] = "Password or username not correct";
                    header('location: /login');
                 }

            }else{
                //De gebruikersnaam niet OK
                $_SESSION['login_incorrect'] = "Password or username not correct";
                header('location: /login');
            } 
    }
}