<?php

interface IUser
{
    public function getId();
    public function setId(int $value);

    public function getName();
    public function setName(string $value);

    public function getUserName();
    public function setUserName(string $value);

    public function getHashedPassword();
    public function setPassword(string $value);
}