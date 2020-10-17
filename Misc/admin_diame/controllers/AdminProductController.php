<?php


class AdminProductController
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->all();
        require 'views/products.view.php';
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $delete = $model->delete($id);
        header('location:/products');
        require 'views/products.view.php';
    }
}