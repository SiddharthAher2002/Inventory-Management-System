<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\MenuService;
use App\Models\User;
class AdminController extends Controller
{
    protected $_userService;

    protected $_menuService;

    public function __construct(
        UserService $userService,
        MenuService $menuService,
    ) {
        $this->_userService = $userService;
        $this->_menuService = $menuService;
    }
    public function getAdminDashboard()
    {
        $menus = $this->_menuService->getMenuList();
        return view('admin.dashboard',['menus'=>$menus]);
    }
    public function getAdminDashboardV2()
    {
        return view('admin.dashboardv2');
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

        if (Auth::attempt($inputCredentials)) {
            $request->session()->regenerate();
            $user = User::where('email', $inputCredentials['email'])->first();
            Auth::login($user);
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'message' => 'Incorrect credentials',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('admin.show.login'));
    }

    // Manage Menu 
    public function showMenuForm()
    {
        return view('admin.menu-module.add-menu');
    }

    public function addMenu(Request $request)
    {
        $data = $request->all();
    }


}
