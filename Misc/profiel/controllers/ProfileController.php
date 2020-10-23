<?php


class ProfileController
{
    public function index()
    {
        $model = new UserModel();
        $profile = $model->profile($_SESSION['userId']);
        // $profile_2 = $model->find($_SESSION['userId']);
        require 'views/profile.view.php';
    }
}