<?php


class AdminUsersController
{
    public function index()
    {
        $model = new UserModel();
        $users = $model->all();
        require 'views/users.view.php';
    }

    function delete($id)
    {
        $model = new UserModel();
        $delete = $model->delete($id);
        header('location:/users');
        require 'views/users.view.php';
    }
}