<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');

        if (auth()->check()){
            return view('login');
        }
            return redirect('/dashboard');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))){
    		return redirect('/dashboard');
    	}
    	return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

