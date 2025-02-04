<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            }
            Auth::logout();
            return redirect()->route('admin.login')->with('error', 'Access Denied');
        }

        return redirect()->route('admin.login')->with('error', 'Invalid credentials');
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
