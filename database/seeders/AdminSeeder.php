<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'nama_depan' => "super",
            'nama_belakang' => "admin",
            'email' => "superadmin@gmail.com",
            'no_handphone' => '0812585655551',
            'role' => 1,
            'password' => Hash::make('123'),
        ]);
    }
}
