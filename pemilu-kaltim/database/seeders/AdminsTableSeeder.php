<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        $password = Hash::make('admin123');
        $adminRecords = [
                        ['nama' => 'Admin', 'email' => 'rivaldivere@gmail.com', 'password' => $password, 'role' => 'admin'],
                      
                    ];
                    Admin::insert($adminRecords);
                }
            }
