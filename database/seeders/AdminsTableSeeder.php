<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'LMS Admin',
            'email' => 'admin@lms.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
