<?php


abstract class PersonDecorator implements IPerson
{
    /**
     * @var IPerson
     */
    protected $person;

    public function __construct(IPerson $person)
    {
        $this->person = $person;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->person->getHealth();
    }

    public function setHealth(int $health): void
    {
        $this->person->setHealth($health);
    }

    /**
     * @return int
     */
    public function getStrength(): int
    {
        return $this->person->getStrength();
    }

    /**
     * @return int
     */
    public function getArmor(): int
    {
        return $this->person->getArmor();
    }



}