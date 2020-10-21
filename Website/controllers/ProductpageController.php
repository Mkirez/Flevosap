<?php


class ProductpageController
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->all();

        require 'views/Productpage.view.php';
    }
    public function appels()
    {
        $model = new ProductModel();
        $products = $model->selectproducts("Appel");

        require 'views/Productpage.view.php';
    }
    public function peer()
    {
        $model = new ProductModel();
        $products = $model->selectproducts("Peer");

        require 'views/Productpage.view.php';
    }


    // public function test(){

    //     $model = new ProductModel();
    //     $products = $model->selectall();

    //     require 'views/Productpage.view.php';


    // }

    public function product_info(){

        if(isset($_GET["id"])){

            //Get product info
            $product_id = $_GET["id"];
            $model = new ProductModel();
            $product = $model->find($product_id);

            if($product != null){
                require 'views/productinfo.view.php';return""; // If product found, Show the product info
            }
        }
        require 'views/errors/404.view.php';return""; // If product not found, Return 404
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