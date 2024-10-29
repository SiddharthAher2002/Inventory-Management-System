<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
class AdminController extends Controller
{
    protected $_userService;

    public function __construct(
        UserService $userService
    ){
        $this->_userService = $userService;
    }
    public function getAdminDashboard(){
        return view('admin.dashboard');
    }

    public function getUsersList(){
        return view('admin.user-module.users');
    }

    public function getUsers(){
        $users = $this->_userService->getAllUsers();
        return response()->json([
            'data' => $users
        ]);
    }

}
