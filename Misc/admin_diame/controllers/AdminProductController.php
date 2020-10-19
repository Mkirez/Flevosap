<?php


class AdminProductController
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->all();
        require 'views/products.view.php';
    }

    public function delete()
    {
        $model = new ProductModel();
        $id=$_GET["id"];
        $delete = $model->delete($id);
        echo $delete;
    }
}