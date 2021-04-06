<?php


class ArmorWearer extends PersonDecorator
{

    public function getArmor(): int
    {
        return parent::getArmor() + 10;
    }

}