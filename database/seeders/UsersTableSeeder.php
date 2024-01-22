<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Account\User;
use App\Models\Account\Role;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create a user with specific attributes
        User::create([
            'name' => 'فاطمة بكر بكران',
            'email' => 'fatimabakar707@gmail.com',
            'phone' => '735320924',
            'password' => Hash::make('123456'),
        ]);
        // Create additional users as needed
        // ...
    }
}
