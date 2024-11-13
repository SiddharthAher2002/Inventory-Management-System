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

    public function getAllUsers($request){
        $data = $this->_userRepository->getAllUsers($request);
        return $data;
    }
    public function getUserByEmail($email){
        if(isset($email) && !empty($email)){
            $user = $this->_userRepository->getUserByemail($email);
            return $user;
        }
        return false;
    }
}