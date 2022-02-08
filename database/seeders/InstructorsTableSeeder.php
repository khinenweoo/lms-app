<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class InstructorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructors')->insert([
            'name' => 'LMS Instructor',
            'email' => 'instructor@lms.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
