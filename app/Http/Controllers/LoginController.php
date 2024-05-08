<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Auth;
class LoginController extends Controller
{
    //
     public function login(Request $request)
{
     if ($request->isMethod('post')) {
        $data = $request->all();
        // Lakukan validasi email dan password
        $credentials = ['email' => $data['email'], 'password' => $data['password']];
        // Lakukan autentikasi berdasarkan role 'admin'
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('admin/dashboard');
        }
        // Lakukan autentikasi berdasarkan role 'pegawai'
        if (Auth::guard('pegawai')->attempt($credentials)) {
            return redirect('pegawai/dashboard');
        }
        // Lakukan autentikasi berdasarkan role 'masyarakat'
        if (Auth::guard('masyarakat')->attempt($credentials)) {
            return redirect('masyarakat/dashboard');
        }
        // Jika tidak ada role yang cocok, kembalikan ke halaman login dengan pesan error
        return redirect()->back()->with('error_message', 'Email dan password salah');
    }
    return view('admin.login');
}
}
