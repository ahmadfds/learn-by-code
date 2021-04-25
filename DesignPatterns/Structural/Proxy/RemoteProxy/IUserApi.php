<?php

interface IUserApi
{
    public function getUserById($id):IUser;

    public function save(IUser $user);

    public function delete(IUser $user);

    public function changePassword(IUser $user, string $newPassword);

}