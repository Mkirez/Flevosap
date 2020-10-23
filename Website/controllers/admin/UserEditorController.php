<?php

class UserEditorController
{
    public function index()
    {
        if(isset($_GET["id"])){
            //Get product info
            $order_id = $_GET["id"];
            $user = new UserModel();
            $user = $user->fetchById($order_id);
            if($user != null){;
                require 'views/admin/admineditusers.view.php'; return "";
            }
        }
        require 'views/admin/errors/404.view.php';return""; // If user not found, Return 404
    }

    public function editUser()
    {
        if (!empty($_POST["gebruikersnaam"]) and !empty($_POST["wachtwoord"])) {
            $user = new UserModel();
            $user->setId((int)trim($_POST["id"]));
            $user->setUserName(trim($_POST["gebruikersnaam"]));
            $user->setType((int)$_POST["type"]);
            $user->setPassword(trim($_POST["wachtwoord"]));
            if ($user->updateUser($user)) {
                header('location: /users');
                die();
            } else {
                echo "Er is helaas iets misgegaan";
            }
        } else {
            echo "Er ontbreken waardes!";
        }
    }
}