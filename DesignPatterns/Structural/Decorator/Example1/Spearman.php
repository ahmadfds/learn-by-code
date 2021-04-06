<?php


class Spearman extends PersonDecorator
{

    public function getStrength(): int
    {
        return parent::getStrength() + 30;
    }

}