<?php

// encapsulation

class Car
{
    private carMake $make;
    private carColor $color;
    private string $model;
    private string $year;
    private bool $running = false;



    // construct method
    public function __construct(
        carMake $make,
        carColor $color,
        string $model,
        string $year
    ) {
        $this->setMake($make);
        $this->setColor($color);
        $this->setModel($model);
        $this->setYear($year);
    }


    // Make setter/getter 
    public function setMake(carMake $make): void
    {
        $this->make = $make;
    }
    public function getMake(): carMake
    {
        return $this->make;
    }

    // Color setter/getter 
    public function setColor(carColor $color): void
    {
        $this->color = $color;
    }
    public function getColor(): carColor
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
        return $this->running ? "Running" : "Stopped";
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
}
