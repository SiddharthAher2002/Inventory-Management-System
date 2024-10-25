<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function getHomePage(){
        return view('frontend.home');
    }
    public function getFrontLoginPage(){
        return view('auth.login');
    }
    public function getFrontSignupPage(){
        return view('auth.register');
    }
}
