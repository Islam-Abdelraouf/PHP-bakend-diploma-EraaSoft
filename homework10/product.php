<?php

class Product
{
    var $name;
    var $price;
    var $brand;
    var $image;
    var $description;
    var $tax;

    function getName()
    {
        return $this->name;
    }

    function getPriceAfterDiscount($percentDiscount): float
    {
        $price = $this->price;
        $discountValue = ($price * $percentDiscount) / 100;
        return ($price - $discountValue);
    }

    function getFinalPrice($percentDiscount): float
    {
        $priceAfterDiscount = $this->getPriceAfterDiscount($percentDiscount); //40
        $taxPrice = $priceAfterDiscount * ($this->tax / 100); // 3.2
        $finalPrice = $priceAfterDiscount + $taxPrice; // 37
        return $finalPrice;
    }
}
