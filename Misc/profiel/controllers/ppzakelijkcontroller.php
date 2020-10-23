<?php


class ppzakelijkcontroller
{
    public function index()
    {
        $model = new ppzakelijkmodel();
        $products = $model->all();
        require 'views/ppzakelijk.view.php';

    }

    public function getProductImage()
    {
        if(isset($_GET['productId']) && is_numeric($_GET['productId']))
        {
            try {
                $model = new ppzakelijkmodel();
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