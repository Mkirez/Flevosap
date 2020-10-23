<?php


class AdminOrderController
{
    public function index()
    {
        $orders = new OrderModel();
        $orders = $orders->fetchAll();
        require 'views/admin/orders.view.php';
    }

    public function show()
    {
        if(isset($_GET["id"])){
            //Get product info
            $order_id = $_GET["id"];
            $order = new OrderModel();
            $order = $order->fetchById($order_id);
            if($order != null){
                $order_rules = new OrderRuleModel();
                $order_rules = $order_rules->fetchByOrderId($order_id);
                require 'views/admin/orders_show.view.php';return"";
            }
        }
        require 'views/admin/errors/404.view.php';return""; // If product not found, Return 404
    }

    public function update()
    {
        if(isset($_POST["id"]) && isset($_POST["status"])){
            //Get product info
            $order = new OrderModel();
            $order->setId((int)$_POST["id"]);
            $order->setStatus((int)$_POST["status"]);
            $order = $order->updateOrder($order);
            if($order){
                header("location: /order?id=" . $_POST["id"]);
            }
        }
        require 'views/admin/errors/404.view.php';return""; // If product not found, Return 404
    }
}