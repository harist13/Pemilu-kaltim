<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Auth;

class AdminController extends Controller
{
    // Tambahkan method dan logika bisnis Anda di sini
   
 public function registerForm()
    {
          $user = Auth::guard('admin')->user(); // Mendapatkan data pengguna yang sedang login
    return view('admin.register', ['user' => $user]);
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email|unique:admins',
                'password' => 'required|string|min:6|confirmed',
                'role' => 'required|in:admin,pegawai,masyarakat',
            ]);

            Admin::create([
                'nama' => $data['nama'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role' => $data['role'],
            ]);

            return redirect('admin/dashboard');
           
        }

        return view('admin.register');
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
        return redirect('login');
    }

    public function dashboard()
{
    $user = Auth::guard('admin')->user(); // Mendapatkan data pengguna yang sedang login
    return view('admin.dashboard', ['user' => $user]);
}

}