<?php

class UserRepositoryGuard implements IUserRepository
{

    private IUserRepository $userRepository;
    private IRole $loggedUserRole;

    public function __construct(IUserRepository $userRepository, IRole $loggedUserRole)
    {
        $this->userRepository = $userRepository;
        $this->loggedUserRole = $loggedUserRole;
    }

    public function save(IUser $user)
    {
        $this->assertLoggedUserCustomerSupportRole();
        $this->userRepository->save($user);
    }

    public function delete(IUser $user)
    {
        $this->assertLoggedUserAdminRole();
        $this->userRepository->delete($user);
    }

    public function changePassword(IUser $user, string $newPassword)
    {
        $this->assertLoggedUserAdminRole();
        $this->userRepository->changePassword($user, $newPassword);
    }

    public function assertLoggedUserAdminRole()
    {
        if(!$this->loggedUserRole->getRole() == 'admin') {
            throw new Exception('You are not allowed to modify users');
        }
    }

    public function assertLoggedUserCustomerSupportRole()
    {
        if(!$this->loggedUserRole->getRole() == 'customer_support') {
            throw new Exception('You are not allowed to modify users');
        }
    }


}