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
        if($request->isMethod('post')) {
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
                return redirect('admin/dashboard');
            } else {
                return redirect()->back()->with('error_message', 'email dan password salah');
            }
        }
        return view('admin.login');
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