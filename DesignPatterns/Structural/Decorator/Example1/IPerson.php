<?php

interface IPerson
{

    public function getHealth(): int;

    public function setHealth(int $health): void;

    public function getStrength(): int;

    public function getArmor(): int;


}