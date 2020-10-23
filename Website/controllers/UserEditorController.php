<?php

class UserEditorController
{
    public function index()
    {
        $model = new UserModel();
        $users = $model->all();
        require 'views/admineditusers.view.php';
    }

    public function editUser()
    {
        if (!empty($_POST["gebruikersnaam"]) and !empty($_POST["wachtwoord"])) {
            $user = new UserModel();
            $user->setId((int)trim($_POST["id"]));
            $user->setUserName(trim($_POST["gebruikersnaam"]));
            $user->setPassword(trim($_POST["wachtwoord"]));
            if ($user->checkExistingUsername($user->getUserName()) != null) {
                if ($user->updateUser($user)) {
                    header('location: /users');
                    die();
                } else {
                    echo "Er is helaas iets misgegaan";
                }
            } else {
                echo "Deze gebruikersnaam bestaat al";
            }
        } else {
            echo "Er ontbreken waardes!";
        }
    }
}