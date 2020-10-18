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
}