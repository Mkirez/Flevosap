<?php

class ProductEditorController
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->all();
        require 'views/admineditproducts.view.php';
    }

    public function editProduct()
    {
        if (!empty($_POST["title"]) and !empty($_POST["productCode"]) and !empty($_POST["productOmschrijving"]) and !empty($_POST["Prijs"]) and !empty($_POST["Hoeveelheid"])) {
            $product = new ProductModel();
            $product->setId((int)trim($_POST["id"]));
            $product->setTitle(trim($_POST["title"]));
            $product->setProductCode(trim($_POST["productCode"]));
            $product->setProductOmschrijving(trim($_POST["productOmschrijving"]));
            $product->setPrijs(trim($_POST["Prijs"]));
            $product->setHoeveelheid(trim($_POST["Hoeveelheid"]));
            if ($product->checkExistingTitle($product->getTitle()) != null) {
                if ($product->updateProduct($product)) {
                    header('location: /products');
                    die();
                } else {
                    echo "Er is helaas iets misgegaan";
                }
            } else {
                echo "Deze gebruikersnaam bestaat al";
            }
        } else {
            echo "Er ontbreken waardes!";
        }
    }

}