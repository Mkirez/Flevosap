<?php


class CheckoutController
{

    public function index()
    {
        //Fetch Cart
        $cart = unserialize($_SESSION['cart']);
        require 'views/checkout.view.php';
    }

    public function CheckOut()
    {
        //Fetch Cart
        $cart = unserialize($_SESSION['cart']);
        $data = $_POST;

        //Create order
        $orderModel = (new OrderModel())
            ->setUserId($_SESSION['userId'])
            ->setStreet($data['street'])
            ->setZipcode($data['zipcode'])
            ->setHouseNr($data['house_nr'])
            ->setCity($data['city']);
        $id = $orderModel->store($orderModel);

        if($id){
            //Store Cart
            foreach ($cart->getProducts() as $product){
                $orderRule = (new OrderRuleModel())
                    ->setProductId($product->getProductId())
                    ->setOrderId($id)
                    ->setTotal($product->getTotal())
                    ->setPrice($product->getPrice());
                $orderRule->store($orderRule);
            }
            $cart = new CartModel(null);
            $_SESSION['cart'] = serialize($cart);
            $_SESSION["checkout_status"] = json_encode(["Bestelling succesvol.","Bedankt voor uw bestelling"]);
            header("location: /checkout/status");
        }else{
            $_SESSION["checkout_status"] = json_encode(["Bestelling mislukt.","Er is helaas wat misgegaan."]);
            header("location: /checkout/status");
        }
    }

    public function status(){
        if(isset($_SESSION["checkout_status"])){
            $status = json_decode($_SESSION["checkout_status"]);
            unset($_SESSION["checkout_status"]);
            require 'views/checkout_status.view.php';
        }else{
            require 'views/errors/404.view.php';return""; // If product not found, Return 404
        }
    }
}