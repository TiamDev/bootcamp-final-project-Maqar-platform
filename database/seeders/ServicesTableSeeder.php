<?php

namespace Database\Seeders;

use App\Models\Maqar\service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        service::create([
            'name' => 'مشروبات',
            'price' => 18.21,
            'provider_id' => 1,
        ]);
        service::create([
            'name' => "موقف سيارة",
            'price' => 5.0,
            'provider_id' => 1,
        ]);
        service::create([
            'name' => ' بروجيكتر',
            'price' => 14.50,
            'provider_id' => 1,
        ]);
        service::create([
            'name' => 'بروجيكتر',
            'price' => 12.00,
            'provider_id' => 2,
        ]);
        service::create([
            'name' => 'مشروبات',
            'price' => 4.00,
            'provider_id' => 2,
        ]);
        service::create([
            'name' => 'وجبة',
            'price' => 25.00,
            'provider_id' => 3,
        ]);
        service::create([
            'name' => 'مواقف سيارة',
            'price' => 2.00,
            'provider_id' => 3,
        ]);
    }
}
