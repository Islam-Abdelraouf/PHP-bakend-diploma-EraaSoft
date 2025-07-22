<?php

class Gift extends Product
{
    public $age;
    public $weight;
    public $materials = [];
    public $specialTax;

    public function displayMaterials(): string
    {
        return implode(", ", $this->materials);
    }

    public function getFinalPrice(): float
    {
        $finalPrice = ($this->price) * (1 + ($this->specialTax));
        return $finalPrice;
    }
}
