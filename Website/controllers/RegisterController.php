<?php
class RegisterController
{
    public function index()
    {
        unset($_SESSION['register_incorrect']);
        require 'views/register.view.php';
    }

    public function register(){
        if(!empty($_POST["gebruikersnaam"]) && !empty($_POST["wachtwoord"]) && !empty($_POST["bevestig_wachtwoord"])){
            if($_POST["wachtwoord"] == $_POST["bevestig_wachtwoord"]){
                $user =  new UserModel();
                $user->setUserName(trim($_POST["gebruikersnaam"]));
                $user->setPassword(trim($_POST["wachtwoord"]));
                if($user->checkExistingUsername($user->getUserName()) != null){
                    if($user->store($user)){
                        header('location: /login');
                        die();
                    }else{
                        $_SESSION['register_incorrect'] = "Er is helaas iets misgegaan";
                    }
                }else{
                    $_SESSION['register_incorrect'] = "Deze gebruikersnaam bestaat al";
                }
            }else{
                $_SESSION['register_incorrect'] = "Wachtwoorden komen niet overeen";
            }
        }else{
            $_SESSION['register_incorrect'] = "Niet alle waardes zijn ingevuld";
        }
        require 'views/register.view.php';
    }
}
