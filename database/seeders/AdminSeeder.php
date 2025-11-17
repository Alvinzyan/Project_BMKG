<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nip' => '12345',
            'password' => Crypt::encryptString('Adminbmkg321'),
            'nama_lengkap' => 'Administrator',
            'peran' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
