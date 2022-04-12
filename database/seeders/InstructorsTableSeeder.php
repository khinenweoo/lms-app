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
            'dateofbirth' => '1990-03-12',
            'gender' => 'male',
            'photo' => 'default.jpg',
            'phone' => '091230345',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('instructors')->insert([
            'name' => 'AEG Instructor',
            'email' => 'aeginstructor@lms.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret123'),
            'dateofbirth' => '1994-04-08',
            'gender' => 'male',
            'photo' => 'default.jpg',
            'phone' => '0912345678',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
