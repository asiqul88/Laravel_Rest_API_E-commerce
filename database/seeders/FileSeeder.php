<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\File;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = [
            [
                'name' => 'hqdefault_26092022_204611.jpg',
                'file' => 'http://127.0.0.1:8000/hqdefault_26092022_204611.jpg',
                'extention' => 'jpg',
                'size' => '21106',
                'description' => 'null',
                'product_id' => '3',
            ],

            [
                'name' => 'dynahod_26092022_204623.jpg',
                'file' => 'http://127.0.0.1:8000/dynahod_26092022_204623.jpg',
                'extention' => 'jpg',
                'size' => '21106',
                'description' => 'null',
                'product_id' => '3',
            ],

            [
                'name' => 'hault_26092022_204001.jpg',
                'file' => 'http://127.0.0.1:8000/hault_26092022_204001.jpg',
                'extention' => 'jpg',
                'size' => '21106',
                'description' => 'null',
                'product_id' => '2',
            ],

            [
                'name' => 'yod_26092022_204698.jpg',
                'file' => 'http://127.0.0.1:8000/yod_26092022_204698.jpg',
                'extention' => 'jpg',
                'size' => '21106',
                'description' => 'null',
                'product_id' => '1',
            ]
         ];

         foreach ($files as $key => $value) {
            File::create($value);
        }
    }
}
