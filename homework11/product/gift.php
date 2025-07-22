<?php

class Gift extends Product
{
    public $wrapType = [];
    public $discount;
    public $color;
    public $supplier;

    public function choosePublisher(int $publisherId): string
    {
        return $this->publishers[$publisherId];
    }

    public function setWrapType($wrapId, $wrapType)
    {
        $this->wrapType[$wrapId] = $wrapType;
    }

    public function calcPrice()
    {
        $finalPrice = ($this->price) * (1 - ($this->discount));
        echo "Price is: " . $finalPrice;
    }
}
