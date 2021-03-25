<?php


class Country
{
    protected $name;

    private static $instances = [];
    private $countryCode;

    public function getInstance($countryCode)
    {
        if(!isset(static::$instances[$countryCode])) {
            static::$instances[$countryCode] = new Country($countryCode);
        }

        return static::$instances[$countryCode];
    }

    private function __construct($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


}