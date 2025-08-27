
<?php

class Product{
    private int $id;
    private string $name;
    private int|float $price;

    public function __construct(int $id, string $name, int|float $price){
        
        // assign basic private properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice(int|float $price)
    {
        return $this->price=$price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}