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

    public function showUsers(){
        return view('admin.user-module.users');
    }

    public function getUsers(Request $request){
        $data = $this->_userService->getAllUsers($request);
        return response()->json($data);
    }

    public function showLoginForm(){
        return view('admin.auth.login');
    }

}
