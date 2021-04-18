<?php

class CarProperties
{
    protected $color, $doors, $engine, $seats;

    public function __construct(string $color, int $doors, float $engine, int $seats)
    {
        $this->color = $color;
        $this->doors = $doors;
        $this->engine = $engine;
        $this->seats = $seats;
    }

    public function getInfo()
    {
        return [
            "Car Color: {$this->color}",
            "Car Number of Doors: {$this->doors}",
            "Car Engine Cylinder Size: {$this->engine}",
            "Car Number of Seats: {$this->seats}"
        ];
    }
}