<?php

namespace App\Interfaces;

interface UserRepositoryInterface 
{
    public function getAllUsers($request = null);
    public function getUserById($userId);
    public function getUserByemail($email);
    public function deleteUser($userId);
    public function createUser(array $userDetails);
    public function updateUser($userId, array $newDetails);
    
}