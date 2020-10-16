<?php


class AdminUsersController
{
    public function index()
    {
        $model = new UserModel();
        $users = $model->all();
        require 'views/users.view.php';
    }
    function deleteIndex($id)
    {

        $this->model->deleteIndex($id);
        header('location: ../index/index');
    }
}