<?php

class User implements IUser
{

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $value)
    {
        $this->id = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $value)
    {
        $this->name = $value;
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function setUserName(string $value)
    {
        $this->username = $value;
    }

    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }

    public function setPassword(string $value)
    {
        $this->hashedPassword = $value;
    }
}