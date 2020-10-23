<?php

class ProductEditorController
{
    public function index()
    {
        if (isset($_GET["id"])) {
            //Get product info
            $product_id = $_GET["id"];
            $product = new ProductModel();
            $product = $product->find($product_id);
            if ($product != null) {
                require 'views/admin/admineditproducts.view.php';
                return "";
            }
        }
        require 'views/admin/errors/404.view.php';
        return ""; // If product not found, Return 404
    }

    public function editProduct()
    {
        if (!empty($_POST["title"]) and !empty($_POST["productCode"]) and !empty($_POST["productOmschrijving"]) and !empty($_POST["Prijs"]) and !empty($_POST["Hoeveelheid"])) {
            $product = new ProductModel();
            if (count($_FILES) > 0) {
                if (is_uploaded_file($_FILES['productImage']['tmp_name'])) {
                    $imgData = file_get_contents($_FILES['productImage']['tmp_name']);
                    $product->setPicture(trim($imgData));
                }
            }
            $product->setId((int)trim($_POST["id"]));
            $product->setTitle(trim($_POST["title"]));
            $product->setProductCode(trim($_POST["productCode"]));
            $product->setProductOmschrijving(trim($_POST["productOmschrijving"]));
            $product->setPrijs(trim($_POST["Prijs"]));
            $product->setHoeveelheid(trim($_POST["Hoeveelheid"]));
            if ($product->updateProduct($product)) {
                header('location: /products');
                die();
            } else {
                echo "Er is helaas iets misgegaan";
            }
        } else {
            echo "Er ontbreken waardes!";
        }
    }

}