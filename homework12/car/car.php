<?php

// encapsulation

class Car
{
    private string $make;
    private string $color;
    private string $model;
    private string $year;
    private bool $running = false;



    // construct method
    public function __construct(
        string $make,
        string $color,
        string $model,
        string $year
    ) {
        $this->make = $make;
        $this->color = $color;
        $this->model = $model;
        $this->year = $year;
    }


    // Make setter/getter 
    public function setMake(string $make): void
    {
        $this->make = $make;
    }
    public function getMake(): string
    {
        return $this->make;
    }

    // Color setter/getter 
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getColor(): string
    {
        return $this->color;
    }


    // Model setter/getter 
    public function setModel(string $model)
    {
        $this->model = $model;
    }
    public function getModel(): string
    {
        return $this->model;
    }


    // Year setter/getter 
    public function setYear(string $year)
    {
        $this->year = $year;
    }
    public function getYear(): string
    {
        return $this->year;
    }

    // engine status getter
    public function getEngineStatus(): string
    {
        $running  = "Running";
        $stopped  = "Stopped";
        return $this->running ?  $running : $stopped;
    }

    // Start engine method
    public function startEngine()
    {
        if (! $this->running) {
            $this->running = true;
        }
    }
    // Stop engine method
    public function stopEngine()
    {
        if ($this->running) {
            $this->running = false;
        }
    }

    // Display Car Information
    public function displayInfo()
    {
        $information = "Maker: " . $this->make . "." . PHP_EOL;
        $information .= "Model: " . $this->model . "." . PHP_EOL;
        $information .= "Color: " . $this->color . "." . PHP_EOL;
        $information .= "Year of production: " . $this->year;
        return $information;
    }
}
