<?php

class CarPropertiesDb
{

    protected array $properties;

    public function getPropertiesObject(string $color, int $doors, float $engine, int $seats)
    {
        $id = md5("{$color}-{$doors}-{$engine}-{$seats}");
        if(!isset($this->properties[$id])) {
            $this->properties[$id] = new CarProperties($color, $doors, $engine, $seats);
        }
        return $this->properties[$id];
    }

}