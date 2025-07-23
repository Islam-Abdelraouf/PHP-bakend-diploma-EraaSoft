<?php

class BabyCar extends Product
{
    public $age;
    public $weight;
    private $materials = [];
    private $specialTax;


    public function setMaterial($materialId, $materialName)
    {
        $this->materials[$materialId ?? null] = $materialName;
    }

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
