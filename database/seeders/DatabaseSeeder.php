<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        $this->call([AdminsTableSeeder::class]);
        $this->call([InstructorsTableSeeder::class]);
        $this->call([CategoriesSeeder::class]);

        \App\Models\Course::factory(30)->create();
        \App\Models\Lesson::factory(40)->create();
    }
}
