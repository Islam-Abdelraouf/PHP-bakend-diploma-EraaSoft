<?php

use BcMath\Number;

class Gift extends Product
{
    public $publishers = [];
    public $writer;
    public $color;
    public $supplier;

    public function choosePublisher(int $publisherId): string
    {
        return $this->publishers[$publisherId];
    }

    public function setPublisher(int $publisherId, string $publisherName)
    {
        $this->publishers[$publisherId] = $publisherName;
    }

    public function getAllPublishers(): string
    {
        return implode(", ", $this->publishers);
    }
}
