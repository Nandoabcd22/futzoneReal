<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Memeriksa apakah user dengan email admin sudah ada
        if (User::where('email', 'admin@example.com')->doesntExist()) {
            // Menambahkan user dengan role 'admin' dan menambahkan nilai untuk kolom 'phone'
            User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'phone' => '1234567890',
            ]);
        }
    }
}
