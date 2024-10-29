<?php

namespace App\Services;
use App\Interfaces\UserRepositoryInterface;
class UserService
{
    protected $_userRepository;

    public function __construct(
        UserRepositoryInterface $userRepository,
    ){
        $this->_userRepository = $userRepository;
    }

    public function getAllUsers(){
        $users = $this->_userRepository->getAllUsers();
        return $users;
    }
}