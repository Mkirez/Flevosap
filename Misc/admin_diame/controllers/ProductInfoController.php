<?php


class ProductInfoController
{
    public function index()
    {
        $productInfo = new ProductInfoModel();
        $productInfoData = $productInfo->fetchAll();
        require 'views/productinfo.view.php';
    }
}