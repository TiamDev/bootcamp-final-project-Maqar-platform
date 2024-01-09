<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location\Directorate;

class DirectoratesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $governorateId = 1;

        $directorates = [
            ['governorate_id' => $governorateId, 'name' => 'المكلا'],
            ['governorate_id' => $governorateId, 'name' => 'الشحر'],
            ['governorate_id' => $governorateId, 'name' => 'غيل باوزير'],
        ];
        foreach ($directorates as $directorate) {
            Directorate::create($directorate);
        }
    }
}
