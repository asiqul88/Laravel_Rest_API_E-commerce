<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
           [
            'first_name' => 'Md. Asiqul',
            'last_name' => 'Islam',
            'email' => 'asiqul889900@gmail.com',
            'password' => Hash::make('12345678')
           ],
           [
            'first_name' => 'User',
            'last_name' => 'Admin',
            'email' => 'user@admin.com',
            'password' => Hash::make('12345678')
           ]
        ]);
    }
}
