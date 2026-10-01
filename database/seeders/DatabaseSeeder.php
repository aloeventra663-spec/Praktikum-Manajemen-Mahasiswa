<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin12345'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User Praktikum',
            'email' => 'user@example.com',
            'password' => Hash::make('user12345'),
            'role' => 'user',
        ]);

        Mahasiswa::create([
            'nim' => '25781001',
            'nama' => 'Andi Saputra',
            'program_studi' => 'Manajemen Informatika',
            'email' => 'andi@example.com',
            'angkatan' => 2025,
        ]);

        Mahasiswa::create([
            'nim' => '25781002',
            'nama' => 'Budi Pratama',
            'program_studi' => 'Manajemen Informatika',
            'email' => 'budi@example.com',
            'angkatan' => 2025,
        ]);

        Mahasiswa::create([
            'nim' => '25781003',
            'nama' => 'Citra Dewi',
            'program_studi' => 'Manajemen Informatika',
            'email' => 'citra@example.com',
            'angkatan' => 2026,
        ]);
    }
}