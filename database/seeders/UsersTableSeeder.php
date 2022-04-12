<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Username',
            'email' => 'student@lms.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret1234'),
            'dob' => '1992-08-25',
            'gender' => 'male',
            'photo' => 'default-avatar.png',
            'phone' => '09123456789',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
