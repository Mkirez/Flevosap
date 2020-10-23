<?php


class ZakelijkeLoginController
{
    public function index()
    {
        unset($_SESSION['login_incorrect']);
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            header("location: /");
            exit;
        }
        require 'views/Zakelijkelogin.view.php';
    }

      public function ZakelijkeloginGet()
    {
        //echo "zakelijkelogin!!"; exit;
        unset($_SESSION['login_incorrect']);
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            header("location: /");
            exit;
        }
        require 'views/Zakelijkelogin.view.php';
    }

     public function logout()
    {
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            unset($_SESSION['loggedIn']);
        }
        header("location: /Zakelijkelogin");
        exit;
    }



    public function Zakelijkelogin(){
       // print_r($_POST);
      
         
            $user =  new ZaklijkuserModel();
            
            if($user->find($_POST['username'])){
                 echo "ïs ok";
                 echo $user->getUserName();

                 //check het wachtwoord
                 $wachtwoord=$user->getPassword();
                 if($_POST['password']==$user->getPassword()){
                    //Alles is OK! Zowel het wachtwoord als de inlognaam
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['userId'] = $user->getId();
                    header("location: /");


                 }else {
                    //De inlognaam is juis maar het wachtwoord is niet ok
                    $_SESSION['login_incorrect'] = "Password or username not correct";
                    header('location: /Zakelijkelogin');
                 }

            }else{
                //De gebruikersnaam niet OK
                $_SESSION['login_incorrect'] = "Password or username not correct";
                header('location: /Zakelijkelogin');
            }    

     }
 }