<?php
namespace App\Repositories;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
class UserRepository implements UserRepositoryInterface
{

    public function getAllUsers($request = null)
    {
        $query = User::where('is_active', '1')
            ->where('is_delete', '0');

        $totalRecords = count($query->get());
        if (isset($request->start) && isset($request->length)) {
            $users = $query->offset($request->start)
                ->limit($request->length)
                ->get();
        } else {
            $users = $query->get();
        }
        $data = [
            'draw' => $request->draw,
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecords,
            'data' => $users
        ];
        return $data;
    }
    public function getUserById($userId)
    {

    }
    public function getUserByemail($email)
    {

    }
    public function deleteUser($userId)
    {

    }
    public function createUser(array $userDetails)
    {

    }
    public function updateUser($userId, array $newDetails)
    {

    }
}