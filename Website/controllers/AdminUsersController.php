<?php


class AdminUsersController
{
    public function index()
    {
        $model = new UserModel();
        $users = $model->all();
        require 'views/users.view.php';
    }

    public function delete()
    {
        $model = new UserModel();
        $id=$_GET["id"];
        $delete = $model->delete($id);
        echo $delete;
    }

    public function AddUser()
    {
        if (!empty($_POST["gebruikersnaam"]) && !empty($_POST["wachtwoord"])) {
            $user = new UserModel();
            $user->setUserName(trim($_POST["gebruikersnaam"]));
            $user->setPassword(trim($_POST["wachtwoord"]));
            if ($user->checkExistingUsername($user->getUserName()) != null) {
                if ($user->store($user)) {
                    header('location: /users');
                    die();
                } else {
                    echo "Er is helaas iets misgegaan";
                }
            } else {
                echo "Deze gebruikersnaam bestaat al";
            }
        } else {
            echo "Niet alle waardes zijn ingevuld";
        }
    }
}