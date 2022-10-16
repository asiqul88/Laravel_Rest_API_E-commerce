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
        $categories = [
            [
                'name' => 'Phone',
                'type' => 'Product',
                'is_active' => 'true'
            ],

            [
                'name' => 'Computer',
                'type' => 'Product',
                'is_active' => 'true'
            ]
         ];

         foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
