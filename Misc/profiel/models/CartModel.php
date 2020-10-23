<?php
/**
 * Created by: Jake 2020
 */

class CartModel
{
    private int $total;
    private float $price_total;
    private array $products;

    public function __construct($cart)
    {
        if($cart != null){
            $this->products = $cart->getProducts();
        }else{
            $this->products = [];
        }
    }

    public function AddProduct(CartProductModel $cart_product)
    {
        foreach($this->products as $key => $product){
            if($product->getProductId() == $cart_product->getProductId()){
                $product->setTotal($product->getTotal() + $cart_product->getTotal());
                $this->products[$key] = $product;
                return null;
            }
        }
        array_push($this->products,$cart_product);
    }

    public function RemoveProduct($product_id)
    {
        foreach($this->products as $key => $product){
            if($product->getProductId() == $product_id){
                unset($this->products[$key]);
                break;
            }
        }
    }

    public function UpdateProduct($product_id,$total)
    {
        foreach($this->products as $key => $product){
            if($product->getProductId() == $product_id){
                $product->setTotal($total);
                if($product->getTotal() <= 0){
                    unset($this->products[$key]);
                }else{
                    $this->products[$key] = $product;
                }
                break;
            }
        }
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        $this->total = 0;
        foreach($this->products as $product){
            $this->total += $product->getTotal();
        }
        return $this->total;
    }

    /**
     * @return String
     */
    public function getPriceTotal(): String
    {
        $this->price_total = 0.00;
        foreach($this->products as $product){
            $this->price_total += $product->getPrice() * $product->getTotal();
        }

        return number_format($this->price_total, 2, ",", ".");
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param array $products
     * @return CartModel
     */
    public function setProducts(array $products): CartModel
    {
        $this->products = $products;
        return $this;
    }
}