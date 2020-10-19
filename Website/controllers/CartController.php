<?php


class CartController
{

    public function index()
    {
        //Fetch Cart
        $cart = unserialize($_SESSION['cart']);
        require 'views/cart.view.php';
    }

    public function add_product(){

        if(isset($_GET["id"])){

            //Fetch Cart
            $cart = unserialize($_SESSION['cart']);

            //Create new Cart Product
            $product = new CartProductModel(null);
            $product->setTotal(1);
            $product->setPrice((new ProductModel())->find($_GET["id"])->getPrijs());
            $product->setProductId($_GET["id"]);

            //Add to Cart
            $cart->AddProduct($product);

            //Save Cart to session
            $_SESSION['cart'] = serialize($cart);

            //Return user to cart
            header("Location: /cart");return "0";
        }

        //If ID is not set return 404
        require 'views/errors/404.view.php';return""; // If product not found, Return 404
    }

    public function remove_product(){

        if(isset($_GET["id"])) {

            //Fetch Cart
            $cart = unserialize($_SESSION['cart']);

            //Remove product By ID
            $cart->RemoveProduct($_GET["id"]);


            //Save Cart to session
            $_SESSION['cart'] = serialize($cart);

            //Return user to cart
            header("Location: /cart");return "0";
        }

        //If ID is not set return 404
        require 'views/errors/404.view.php';return""; // If product not found, Return 404
    }


    public function update_product(){

        if(isset($_POST["quantity"])) {

            //Fetch Cart
            $cart = unserialize($_SESSION['cart']);

            //Loop over quantity's
            foreach ($_POST["quantity"] as $product_id => $quantity) {
                //update product By ID
                $cart->UpdateProduct($product_id, $quantity);
            }

            //Save Cart to session
            $_SESSION['cart'] = serialize($cart);

            //Return user to cart
            header("Location: /cart");return "0";
        }

        //If ID is not set return 404
        require 'views/errors/404.view.php';return""; // If product not found, Return 404
    }
}