<?php


class ProfileController
{
    public function index()
    {
        $model = new UserModel();
        $profile = $model->profile($_SESSION['userId']);
        $orders = new OrderModel();
        $orders = $orders->fetchByUserId($_SESSION['userId']);
        require 'views/profile.view.php';
    }
}