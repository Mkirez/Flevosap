<?php

class AdminController
{
    public function index()
    {
        $userInfo = new UserModel();
        $userInfoData = $userInfo->all();
        require 'views/dashboard.view.php';
    }
}