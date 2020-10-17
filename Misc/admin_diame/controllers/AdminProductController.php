<?php


class AdminProductController
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->all();
        require 'views/products.view.php';
    }
    function delete($id)
    {
        $model = new ProductModel();
        $delete = $model->delete($id);
        header('location:/Products');
        require 'views/products.view.php';
    }
}