<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'item_id' => '1',
                'title' => 'product21',
                'category_id' => '2',
                'sub_category_id' => '1',
                'negotiable' => 'false',
                'price' => '540.5',
                'condition' => 'new',
                'description' => 'test description 1',
                'min_quantity' => '20',
                'validity' => '16-10-2021 00:00:00',
                'is_primary' => 'true',
            ],

            [
                'item_id' => '2',
                'title' => 'product22',
                'category_id' => '1',
                'sub_category_id' => '4',
                'negotiable' => 'false',
                'price' => '240',
                'condition' => 'new',
                'description' => 'test description 2',
                'min_quantity' => '15',
                'validity' => '16-10-2021 00:00:00',
                'is_primary' => 'true',
            ],

            [
                'item_id' => '7',
                'title' => 'product2',
                'category_id' => '1',
                'sub_category_id' => '2',
                'negotiable' => 'false',
                'price' => '54.5',
                'condition' => 'new',
                'description' => 'test description',
                'min_quantity' => '10',
                'validity' => '26-10-2021 00:00:00',
                'is_primary' => 'true',
            ],
            [
                'item_id' => '3',
                'title' => 'product24',
                'category_id' => '2',
                'sub_category_id' => '1',
                'negotiable' => 'false',
                'price' => '540.5',
                'condition' => 'new',
                'description' => 'test description 1',
                'min_quantity' => '20',
                'validity' => '16-10-2021 00:00:00',
                'is_primary' => 'true',
            ],

            [
                'item_id' => '4',
                'title' => 'product15',
                'category_id' => '1',
                'sub_category_id' => '4',
                'negotiable' => 'false',
                'price' => '240',
                'condition' => 'new',
                'description' => 'test description 2',
                'min_quantity' => '15',
                'validity' => '16-10-2021 00:00:00',
                'is_primary' => 'true',
            ],

            [
                'item_id' => '5',
                'title' => 'product16',
                'category_id' => '2',
                'sub_category_id' => '3',
                'negotiable' => 'false',
                'price' => '270.5',
                'condition' => 'new',
                'description' => 'test description 4',
                'min_quantity' => '50',
                'validity' => '16-10-2021 00:00:00',
                'is_primary' => 'true',
            ],

            [
                'item_id' => '6',
                'title' => 'product17',
                'category_id' => '1',
                'sub_category_id' => '4',
                'negotiable' => 'false',
                'price' => '240',
                'condition' => 'new',
                'description' => 'test description 2',
                'min_quantity' => '15',
                'validity' => '16-10-2021 00:00:00',
                'is_primary' => 'true',
            ],

            [
                'item_id' => '8',
                'title' => 'product18',
                'category_id' => '2',
                'sub_category_id' => '3',
                'negotiable' => 'false',
                'price' => '270.5',
                'condition' => 'new',
                'description' => 'test description 4',
                'min_quantity' => '50',
                'validity' => '16-10-2021 00:00:00',
                'is_primary' => 'true',
            ]
         ];

         foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
