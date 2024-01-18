<?php

namespace Database\Seeders;

use App\Models\maqar\Provider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provider::create([
            'user_id' => 2, // Replace with the desired user_id
            'directorate_id' => 1, // Replace with the desired directorate_id
            'name' => 'Sanad',
            'title' => 'سند',
            'email' => 'provider@example.com',
            'address' => 'منطقة بلقيس',
            'currency' => 'دولار', // Replace with the desired currency
            'phone' => 1234567890, // Replace with the desired phone number
            'tradeDocument' => 'Trade Document',
            'logo' => '/logo/pp.png',
            'identity_NO' => 1234500067890, // Replace with the desired identity number
            'state' => 'complete', // Replace with the desired state
            'startWorkHour' => 7, // Replace with the desired start work hour
            'endWorkHour' => 20, // Replace with the desired end work hour
            'startWorkDay' => 'السبت',
            'endWorkDay' => 'الخميس',
        ]);
        Provider::create([
            'user_id' => 4, // Replace with the desired user_id
            'directorate_id' => 1, // Replace with the desired directorate_id
            'name' => 'Abrage',
            'title' => 'ابراج السلام ',
            'email' => 'provider2@example.com',
            'address' => 'اربعين شقه ',
            'currency' => 'رس', // Replace with the desired currency
            'phone' => 1234567890, // Replace with the desired phone number
            'tradeDocument' => 'Trade Document',
            'logo' => '/logo/pp.png',
            'identity_NO' => 1234500067890, // Replace with the desired identity number
            'state' => 'complete', // Replace with the desired state
            'startWorkHour' => 8, // Replace with the desired start work hour
            'endWorkHour' => 22, // Replace with the desired end work hour
            'startWorkDay' => 'الاحد',
            'endWorkDay' => 'الخميس',
        ]);
        Provider::create([
            'user_id' => 5, // Replace with the desired user_id
            'directorate_id' => 2, // Replace with the desired directorate_id
            'name' => 'Algelany',
            'title' => 'الجيلاني',
            'email' => 'provide3r@example.com',
            'address' => 'منطقة بلقيس',
            'currency' => 'رس', // Replace with the desired currency
            'phone' => 1234567890, // Replace with the desired phone number
            'tradeDocument' => 'Trade Document',
            'logo' => '/logo/pp.png',
            'identity_NO' => 1234500067890, // Replace with the desired identity number
            'state' => 'complete', // Replace with the desired state
            'startWorkHour' => 9, // Replace with the desired start work hour
            'endWorkHour' => 22, // Replace with the desired end work hour
            'startWorkDay' => 'الاحد',
            'endWorkDay' => 'الخميس',
        ]);
    }
}
