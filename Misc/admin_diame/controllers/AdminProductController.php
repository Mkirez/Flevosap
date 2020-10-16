<?php


class AdminProductController
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->all();
        require 'views/products.view.php';
    }
}