<?php
/**
 * Created by: Jake 2020
 */

class CartProductModel
{
    private int $product_id, $total;
    private float $price;

    public function __construct($product)
    {
        if($product != null){
            $this->product_id = $product->getProductId();
            $this->total = $product->getTotal();
            $this->price = $product->getPrice();
        }
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->product_id;
    }

    /**
     * @param int $product_id
     * @return CartProductModel
     */
    public function setProductId(int $product_id): CartProductModel
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return CartProductModel
     */
    public function setTotal(int $total): CartProductModel
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param String $price
     * @return CartProductModel
     */
    public function setPrice(string $price): CartProductModel
    {
        $this->price = $price;
        return $this;
    }
}