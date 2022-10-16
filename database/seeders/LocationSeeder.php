<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                'code'=> 'SU-00000001',
                'deleted_at' => 'null',
                'country' => 'BD',
                'address_1' => 'Khilkhet',
                'address_2' => 'null',
                'city' => 'Dhaka',
                'state' => 'Dhaka',
                'zone' => 'Uttora',
                'zip_code' => '1210',
                'lat' => '23.830646510005334',
                'lng' => '90.42397062039595',
                'type' => 'offer',
                'added_by' => '5'
            ],

            [
                'code'=> 'SU-00000002',
                'deleted_at' => 'null',
                'country' => 'BD',
                'address_1' => 'Khilkhet',
                'address_2' => 'null',
                'city' => 'Dhaka',
                'state' => 'Dhaka',
                'zone' => 'Uttora',
                'zip_code' => '1211',
                'lat' => '24.83064651000533',
                'lng' => '91.4239706203959',
                'type' => 'offer',
                'added_by' => '1'
            ]
         ];

         foreach ($locations as $key => $value) {
            Location::create($value);
        }
    }
}
