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

    Public function login3(){
        $user =  new UserModel();
            if($user->findByName($_POST['username'],1)){
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