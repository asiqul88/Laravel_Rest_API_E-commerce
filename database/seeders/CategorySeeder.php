<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Phone',
                'type' => 'Product',
                'is_active' => 'True'
            ],

            [
                'name' => 'Computer',
                'type' => 'Product',
                'is_active' => 'True'
            ]
         ]);
    }
}
