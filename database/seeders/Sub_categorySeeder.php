<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sub_category;

class Sub_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_categories = [
            [
                'name' => 'samsung',
                'parent_id' => '2',
                'is_active' => 'true'
            ],

            [
                'name' => 'oppo',
                'parent_id' => '1',
                'is_active' => 'true'
            ],
            [
                'name' => 'Huwawei',
                'parent_id' => '2',
                'is_active' => 'true'
            ],

            [
                'name' => 'Nokia',
                'parent_id' => '2',
                'is_active' => 'true'
            ]
         ];

         foreach ($sub_categories as $key => $value) {
            Sub_category::create($value);
        }
    }
}
