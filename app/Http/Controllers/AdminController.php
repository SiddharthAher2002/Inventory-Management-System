<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Services\UserService;
class AdminController extends Controller
{
    protected $_userService;

    public function __construct(
        UserService $userService
    ) {
        $this->_userService = $userService;
    }
    public function getAdminDashboard()
    {
        return view('admin.dashboard');
    }

    public function showUsers()
    {
        return view('admin.user-module.users');
    }

    public function getUsers(Request $request)
    {
        $data = $this->_userService->getAllUsers($request);
        return response()->json($data);
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $inputCredentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($inputCredentials)){
            var_dump("yes");
        }
        else
            var_dump("no");
        die;
    }

}
