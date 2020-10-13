<?php

class AdminController
{
    public function index()
    {
        $userInfo = new UserModel();
        $userInfoData = $userInfo->fetchAll();
        require 'views/dashboard.view.php';
    }
}