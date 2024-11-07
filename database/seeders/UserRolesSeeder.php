<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_roles')->insert([
            ['gamertag' => 'CloudD8643', 'role' => 'admin'],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
