<?php

namespace Database\Seeders;

use App\Models\Maqar\WorkspaceDuration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkspaceDurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkspaceDuration::create([
            'name' => 'hour',
            'title' => 'ساعة',
            'description' => 'Duration Description',
        ]);
        WorkspaceDuration::create([
            'name' => 'day',
            'title' => 'يوم',
            'description' => 'Duration Description',
        ]);
        WorkspaceDuration::create([
            'name' => 'week',
            'title' => 'اسبوع',
            'description' => 'Duration Description',
        ]);
        WorkspaceDuration::create([
            'name' => 'month',
            'title' => 'شهر',
            'description' => 'Duration Description',
        ]);
    }
}
