<?php

class User
{
    protected $id = 0;
    protected $name = '';
    protected $email = '';
    protected $phonenumber = '';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhonenumber(): string
    {
        return $this->phonenumber;
    }

    /**
     * @param string $phonenumber
     */
    public function setPhonenumber(string $phonenumber): void
    {
        $this->phonenumber = $phonenumber;
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'phone' => $this->getPhonenumber()
        ];
    }
}


class MySQLUserRepository
{

    protected function execQuery($sql)
    {
        // Todo
    }

    public function save(User $user)
    {
        $toArray = $user->toArray();
        $sql = 'REPLACE INTO user ("'.implode('", "', array_keys($toArray)).'") VALUES ("'.implode('", "', $toArray).'")';
        $this->execQuery($sql);
    }
}



class MongoDBUserRepository
{

    protected function execCommand($command)
    {
        // Todo
    }

    public function save(User $user)
    {
        $command = 'db.user.create('.json_encode($user->toArray()).');';
        $this->execCommand($command);
    }
}