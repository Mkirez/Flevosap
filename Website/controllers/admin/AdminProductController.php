<?php


class AdminProductController
{
    public function index()
    {
        $model = new ProductModel();
        $products = $model->all();
        require 'views/admin/products.view.php';
    }

    public function delete()
    {
        $model = new ProductModel();
        $id = $_GET["id"];
        $delete = $model->delete($id);
        echo $delete;
    }

    public function create()
    {
        require 'views/admin/products_create.view.php';
    }

    public function AddProduct()
    {
        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['productImage']['tmp_name'])) {
                $imgData = file_get_contents($_FILES['productImage']['tmp_name']);
                if (!empty($_POST["title"]) && !empty($_POST["productCode"]) && !empty($_POST["productOmschrijving"]) && !empty($_POST["Prijs"]) && !empty($_POST["Hoeveelheid"])) {
                    $product = new ProductModel();
                    $product->setTitle(trim($_POST["title"]));
                    $product->setProductCode(trim($_POST["productCode"]));
                    $product->setProductOmschrijving(trim($_POST["productOmschrijving"]));
                    $product->setPicture(trim($imgData));
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
            } else {
                echo "Image not correct";
            }
        } else {
            echo "Image not correct";
        }
    }
}