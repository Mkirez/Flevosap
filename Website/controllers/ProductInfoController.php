<?php


class ProductInfoController
{
    public function index()
    {
        $productInfo = new ProductInfoModel();
        $productInfo->fetchAll();
        require 'views/productinfo.view.php';
    }
}