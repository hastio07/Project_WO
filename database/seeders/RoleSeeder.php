<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $Role = [['level' => 'super_admin'], ['level' => 'admin'], ['level' => 'super_user']];
        foreach ($Role as $value) {
            Role::create($value);
        }
    }
}
