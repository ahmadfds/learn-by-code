<?php

interface IObserver
{
    public function handle(array $params):bool;
}