<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect langsung ke halaman yang diinginkan setelah login berhasil
            return redirect()->intended('admin/dashboard'); // Ganti '/dashboard' sesuai dengan halaman tujuan Anda
        }

        return redirect()->back()->withErrors(['email' => 'Login Failed.']);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
