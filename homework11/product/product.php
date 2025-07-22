<?php

class Product
{
    public $name;
    public $price;
    public $decsription;
    public $image;

    public function __construct(string $name, float $price, string $decsription, string $image)
    {
        $this->name  = $name;
        $this->price  = $price;
        $this->decsription  = $decsription;
        $this->image  = $image;
    }

    public function uploadImage()
    {
        echo "Image uploaded successfully!";
    }

    public function calcPrice()
    {
        echo "Price is: " . $this->price;
    }
}
