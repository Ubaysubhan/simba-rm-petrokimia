<?php

namespace App\Http\Controllers\Resource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->intended('/Admin');
        }
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
    
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect()->intended('/');

    }
}