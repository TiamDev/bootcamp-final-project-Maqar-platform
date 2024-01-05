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
            'email' => 'fatima@example.com',
            'phone' => '789456123',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'روعة محمد باعيسى',
            'email' => 'rawaa@example.com',
            'phone' => '789456789',

            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name' => 'رغد محمد العطاس',
            'email' => 'ragad@example.com',
            'phone' => '789788123',

            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name' => 'فاطمة محمد بن عبد العزيز',
            'email' => 'fofo1@example.com',
            'phone' => '787856123',

            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name' => 'سامية محمد بن الشبيبي',
            'email' => 'soso1@example.com',
            'phone' => '789776123',

            'password' => Hash::make('123456'),
        ]);

        // Create additional users as needed
        // ...
    }
}
