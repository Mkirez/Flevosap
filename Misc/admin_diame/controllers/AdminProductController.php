<?php


class AdminProductController
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->all();
        require 'views/products.view.php';
    }
    function deleteIndex($id)
    {

        $this->model->deleteIndex($id);
        header('location: ../index/index');
    }
}