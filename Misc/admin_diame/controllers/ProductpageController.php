<?php


class ProductpageController
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->all();
        require 'views/Productpage.view.php';

    }

    public function getProductImage()
    {
        if(isset($_GET['productId']) && is_numeric($_GET['productId']))
        {
            try {
                $model = new ProductModel();
                $response_data = $model->getProductPictureByProductId($_GET['productId']);
                header('Content-type: image/jpg');
                echo $response_data;
            }
            catch (Exception $e)
            {
                http_response_code(404);
                echo 'ERROR: '.$e->getMessage();
            }
        }
        else
        {
            http_response_code(400);
            echo 'ERROR: Product Id not given or malformed.';
        }
    }
}