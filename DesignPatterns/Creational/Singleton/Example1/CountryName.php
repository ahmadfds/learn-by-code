<?php

class CountryName
{
    private static $instance;

    private $countries = [
        'JO' => 'Jordan',
        'SA' => 'Saudi Arabia',
        'EG' => 'Egypt'
    ];

    private function __construct()
    {
    }

    public static function instance():CountryName
    {
        if(!static::$instance) {
            static::$instance = new CountryName();
        }
        return static::$instance;
    }

    public function getByCode($code)
    {
        return $this->countries[$code] ?? null;
    }
}