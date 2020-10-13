<?php

class AdminController
{
    public function index()
    {
        $UserInfo = new UserModel();
        $UserInfoData = $UserInfo->fetchAll();
        require 'views/dashboard.view.php';
    }
}