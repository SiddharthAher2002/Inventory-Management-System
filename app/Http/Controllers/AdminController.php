<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAdminDashboard(){
        return view('admin.dashboard');
    }
}