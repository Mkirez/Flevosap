<?php


class AdminUsersController
{
    public function index()
    {
        $model = new UserModel();
        $users = $model->fetchUsers();
        require 'views/users.view.php';
    }
}