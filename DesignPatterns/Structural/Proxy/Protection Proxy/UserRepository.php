<?php

class UserRepository implements IUserRepository
{

    public function save(IUser $user)
    {
        if($user->getId()) {
            $this->driver->update([
                'username' => $user->getUserName(),
                'name' => $user->getName()
            ]);
        } else {
            $id = $this->driver->insert([
                'username' => $user->getUserName(),
                'name' => $user->getName(),
                'hashed_password' => $user->getHashedPassword()
            ]);
            $user->setId($id);
        }
    }

    public function delete(IUser $user)
    {
        $this->driver->deleteById($user->getId());
    }

    public function changePassword(IUser $user, string $newPassword)
    {
        $user->setPassword($newPassword);
        $this->driver->update($user->getId(), [
            'hashed_password' => $user->getHashedPassword()
        ]);
    }


}