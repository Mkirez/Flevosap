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

    public function AddProduct()
    {
        if (!empty($_POST["title"]) && !empty($_POST["productCode"]) && !empty($_POST["productOmschrijving"]) && !empty($_POST["Prijs"]) && !empty($_POST["Hoeveelheid"])) {
            $product = new ProductModel();
            $product->setTitle(trim($_POST["title"]));
            $product->setProductCode(trim($_POST["productCode"]));
            $product->setProductOmschrijving(trim($_POST["productOmschrijving"]));
            $product->setPrijs(trim($_POST["Prijs"]));
            $product->setHoeveelheid(trim($_POST["Hoeveelheid"]));
            if ($product->checkExistingTitle($product->getTitle()) != null) {
                if ($product->store($product)) {
                    header('location: /products');
                    die();
                } else {
                    echo "Er is helaas iets misgegaan";
                }
            } else {
                echo "Dit product bestaat al";
            }
        } else {
            echo "Niet alle waardes zijn ingevuld";
        }
    }
}