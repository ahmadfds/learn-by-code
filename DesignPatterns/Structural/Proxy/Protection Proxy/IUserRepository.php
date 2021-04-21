<?php

interface IUserRepository
{
    public function save(IUser $user);

    public function delete(IUser $user);

    public function changePassword(IUser $user, string $newPassword);
}