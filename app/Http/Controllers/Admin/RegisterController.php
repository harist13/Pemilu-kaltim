<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Pegawai;
use App\Models\Masyarakat;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,email|unique:pegawais,email|unique:masyarakats,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,pegawai,masyarakat',
        ]);

        $model = null;
        if ($validatedData['role'] === 'admin') {
            $model = Admin::create([
                'nama' => $validatedData['nama'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'role' => $validatedData['role'],
            ]);
        } elseif ($validatedData['role'] === 'pegawai') {
            $model = Pegawai::create([
                'nama' => $validatedData['nama'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'role' => $validatedData['role'],
            ]);
        } elseif ($validatedData['role'] === 'masyarakat') {
            $model = Masyarakat::create([
                'nama' => $validatedData['nama'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'role' => $validatedData['role'],
            ]);
        }

        // Redirect based on the role
        if ($model) {
            if ($validatedData['role'] === 'admin') {
                return redirect('admin/dashboard');
            } elseif ($validatedData['role'] === 'pegawai') {
                return redirect('pegawai/dashboard');
            } elseif ($validatedData['role'] === 'masyarakat') {
                return redirect('masyarakat/dashboard');
            }
        }

        return redirect()->back()->withInput()->withErrors(['error_message' => 'Failed to register user.']);
    }
}
