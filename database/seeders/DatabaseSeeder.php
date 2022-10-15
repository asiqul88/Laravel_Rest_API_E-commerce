<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(ResultSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(Sub_categorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FileSeeder::class);
    }
}
