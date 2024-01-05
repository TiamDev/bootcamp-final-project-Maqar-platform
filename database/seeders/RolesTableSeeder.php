<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Account\Role;
use App\Models\Account\Permission;
use App\Models\Account\User;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        Role::create([
            'name' => 'super-admin',
            'label' => 'مدير المنصة',
        ]);
        Role::create([
            'name' => 'admin',
            'label' => 'مزود مساحات',
        ]);
        Role::create([
            'name' => 'reception',
            'label' => 'استقبال',
        ]);
        Role::create([
            'name' => 'content-admin',
            'label' => 'مسؤول المحتوى',
        ]);
        Role::create([
            'name' => 'client',
            'label' => 'عميل',
        ]);

        // Create additional roles as needed
        // ...


    }
}
