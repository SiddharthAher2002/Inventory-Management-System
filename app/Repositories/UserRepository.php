<?php
namespace App\Repositories;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
class UserRepository implements UserRepositoryInterface
{
    
    public function getAllUsers(){
        return User::all();
    }
    public function getUserById($userId){

    }
    public function getUserByemail($email){

    }
    public function deleteUser($userId){

    }
    public function createUser(array $userDetails){

    }
    public function updateUser($userId, array $newDetails){

    }
}