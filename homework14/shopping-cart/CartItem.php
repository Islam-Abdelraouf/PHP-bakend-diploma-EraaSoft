<?php

require_once 'product.php';

class CartItem
{
    private product $product;
    private int $qty;

    public function __construct(product $product, int $qty)
    {
        if ($qty > 0) {
            $this->product = $product;
            $this->qty = $qty;
        }
    }


    public function getProduct()
    {
        return $this->product;
    }

    public function getQty()
    {
        return $this->qty;
    }


    public function setQty(int $qty)
    {
        if ($qty > 0) {
            $this->qty = $qty;
        }
    }

    public function getItemPrice()
    {
        return $this->product->getPrice() * $this->qty;
    }

}
