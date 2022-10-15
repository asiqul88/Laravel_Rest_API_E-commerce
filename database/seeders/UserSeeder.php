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
            'first_name' => 'User1',
            'last_name' => 'Admin2',
            'email' => 'user@admin1.com',
            'password' => Hash::make('12345678')
           ],
           [
            'first_name' => 'Md. Asiqul1',
            'last_name' => 'Islam',
            'email' => 'asiqul889900@gmail1.com',
            'password' => Hash::make('12345678')
           ],
           [
            'first_name' => 'User2',
            'last_name' => 'Admin2',
            'email' => 'user@admin.com2',
            'password' => Hash::make('12345678')
           ],
           [
            'first_name' => 'Jhon',
            'last_name' => 'carry',
            'email' => 'jhoncarry@gmail.com',
            'password' => Hash::make('12345678')
           ],
           [
            'first_name' => 'User3',
            'last_name' => 'Admin3',
            'email' => 'user@admin3.com',
            'password' => Hash::make('12345678')
           ]
        ]);
    }
}
