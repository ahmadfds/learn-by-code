<?php

class UserApi implements IUserApi
{

    private $apiClient;

    public function __construct($apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getUserById($id): IUser
    {
        $json  = $this->apiClient->get("https://example.com/api/user", ['id' => $id]);
        return $this->jsonToUser($json);
    }

    public function save(IUser $user)
    {
        $this->apiClient->post("https://example.com/api/user", $user->toArray());
    }

    public function delete(IUser $user)
    {
        $this->apiClient->delete("https://example.com/api/user", ['id' => $user->getId()]);
    }

    public function changePassword(IUser $user, string $newPassword)
    {
        $this->apiClient->put("https://example.com/api/user", $user->toArray());
    }

    protected function jsonToUser($data):IUser
    {
        // to do
    }
}