<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Result;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Result::insert([
            [
                'item_type' => 'product1',
                'location_id' => '2',
                'tradable' => 'true',
                'user_id' => '1',
                'status' => 'pending',
                'is_active' => 'true'
            ],

            [
                'item_type' => 'product2',
                'location_id' => '2',
                'tradable' => 'true',
                'user_id' => '1',
                'status' => 'pending',
                'is_active' => 'true'
            ],

            [
                'item_type' => 'product3',
                'location_id' => '1',
                'tradable' => 'true',
                'user_id' => '2',
                'status' => 'pending',
                'is_active' => 'true'
            ],

            [
                'item_type' => 'product4',
                'location_id' => '2',
                'tradable' => 'true',
                'user_id' => '3',
                'status' => 'pending',
                'is_active' => 'true'
            ],

            [
                'item_type' => 'product5',
                'location_id' => '1',
                'tradable' => 'true',
                'user_id' => '4',
                'status' => 'pending',
                'is_active' => 'true'
            ],

            [
                'item_type' => 'product6',
                'location_id' => '2',
                'tradable' => 'true',
                'user_id' => '1',
                'status' => 'pending',
                'is_active' => 'true'
            ],

            [
                'item_type' => 'product',
                'location_id' => '1',
                'tradable' => 'true',
                'user_id' => '5',
                'status' => 'pending',
                'is_active' => 'true'
            ],

            [
                'item_type' => 'product8',
                'location_id' => '1',
                'tradable' => 'true',
                'user_id' => '3',
                'status' => 'pending',
                'is_active' => 'true'
            ]
         ]);
    }
}
