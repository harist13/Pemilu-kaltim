<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    // Tambahkan method dan logika bisnis Anda di sini
   
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

public function pegawaiDashboard()
{
    $user = Auth::guard('pegawai')->user();
    return view('pegawai.dashboard', ['user' => $user]);
}

public function masyarakatDashboard()
{
    $user = Auth::guard('masyarakat')->user();
    return view('masyarakat.dashboard', ['user' => $user]);
}

    
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function dashboard()
{
    $user = Auth::guard('admin')->user(); // Mendapatkan data pengguna yang sedang login
    return view('admin.dashboard', ['user' => $user]);
}

}