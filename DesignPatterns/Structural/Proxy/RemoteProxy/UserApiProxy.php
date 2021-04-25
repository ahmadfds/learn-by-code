<?php

class UserApiProxy implements IUserApi
{
    private IUserApi $userApi;
    private $apiClient;

    public function __construct(IUserApi $userApi, $apiClient)
    {
        $this->userApi = $userApi;
        $this->apiClient = $apiClient;
    }

    public function getUserById($id): IUser
    {
        return $this->userApi->getUserById($id);
    }

    public function save(IUser $user)
    {
        $this->assertUserVersion($user);
        $this->userApi->save($user);
    }

    public function delete(IUser $user)
    {
        $this->userApi->delete($user);
    }

    public function changePassword(IUser $user, string $newPassword)
    {
        $this->userApi->changePassword($user, $newPassword);
    }

    private function assertUserVersion(IUser $user)
    {
        $remoteLastUpdated = $this->apiClient->get('https://example.com/user-version', ['id' => $user->getId()]);
        if($remoteLastUpdated != $user->getUpdatedAt()) {
            throw new \Exception('Remote user already has been modified by someone else');
        }
    }

}