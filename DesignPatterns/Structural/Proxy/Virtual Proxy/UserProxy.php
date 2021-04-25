<?php

class UserProxy implements IUser
{

    private int $id;
    private IUserRepository $userRepository;
    private IUser $user;

    public function __construct(int $id, IUserRepository $userRepository)
    {
        $this->id = $id;
        $this->userRepository = $userRepository;
    }

    public function getId()
    {
        return $this->user->getId();
    }

    public function setId(int $value)
    {
        $this->user->setId($value);
    }

    public function getName()
    {
        $this->assertUserInitiated();
        return $this->user->getName();
    }

    public function setName(string $value)
    {
        $this->assertUserInitiated();
        $this->user->setName($value);
    }

    public function getUserName()
    {
        $this->assertUserInitiated();
        return $this->user->getUserName();
    }

    public function setUserName(string $value)
    {
        $this->assertUserInitiated();
        $this->user->setUserName($value);
    }

    public function getHashedPassword()
    {
        $this->assertUserInitiated();
        return $this->user->getHashedPassword();
    }

    public function setPassword(string $value)
    {
        $this->assertUserInitiated();
        $this->user->setPassword($value);
    }

    public function assertUserInitiated()
    {
        if(!$this->user) {
            $this->user = $this->userRepository->getUserById($this->id);
            if(!$this->user) {
                throw new Exception('Invalid user');
            }
        }

    }
}