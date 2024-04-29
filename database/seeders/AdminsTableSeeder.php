<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('password123'); // Change the password as needed
        
        // Seed data for admin, pegawai, and masyarakat roles
        $adminRecords = [
            ['nama' => 'Muhammad Harist Illyasa', 'email' => 'admin@example.com', 'password' => $password, 'role' => 'admin'],
            ['nama' => 'Riski perdana', 'email' => 'pegawai@example.com', 'password' => $password, 'role' => 'pegawai'],
            ['nama' => 'fatur', 'email' => 'masyarakat@example.com', 'password' => $password, 'role' => 'masyarakat'],
        ];

        // Insert records into the admins table
        Admin::insert($adminRecords);
    }
}
