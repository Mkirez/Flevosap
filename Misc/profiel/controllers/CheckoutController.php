<?php


class CheckoutController
{

    public function index()
    {
        //Fetch Cart
        $cart = unserialize($_SESSION['cart']);
        require 'views/checkout.view.php';
    }
}