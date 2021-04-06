<?php


class Swordsman extends PersonDecorator
{

    public function getStrength(): int
    {
        return parent::getStrength() + 50;
    }

}