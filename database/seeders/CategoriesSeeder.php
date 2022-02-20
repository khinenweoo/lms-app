<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Computer Science',
                'slug' => 'computer_science',
                'icon' => 'caticon.png',
                'description' => 'IT courses category',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Business Administration',
                'slug' => 'business_administration',
                'icon' => 'caticon.png',
                'description' => 'Business courses category',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Foreign Language',
                'slug' => 'foreign_language',
                'icon' => 'caticon.png',
                'description' => 'Foreign Language courses category',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
