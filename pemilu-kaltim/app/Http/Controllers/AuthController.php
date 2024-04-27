<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            return redirect('/homepage');
        } else {
            // Jika gagal login
            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        }
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
