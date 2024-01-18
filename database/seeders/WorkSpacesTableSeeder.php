<?php

namespace Database\Seeders;

use App\Models\maqar\Workspace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSpacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace-1x',
            'title' => 'مكتب 1',
            'description' => 'Workspace Description',
            'maxPeople' => 2, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace-2x',
            'title' => ' مكتب 2 ',
            'description' => 'Workspace Description',
            'maxPeople' => 5, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 2, // Replace with the desired workspaceType_id
            'name' => 'Workspace-3x',
            'title' => 'مكتب 3',
            'description' => 'Workspace Description',
            'maxPeople' => 18, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 3, // Replace with the desired workspaceType_id
            'name' => 'room-1x',
            'title' => 'غرفة اجتماعات',
            'description' => 'Workspace Description',
            'maxPeople' => 20, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 2, // Replace with the desired workspaceType_id
            'name' => 'Workspace-4x',
            'title' => 'مكتب 4',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace-5x',
            'title' => 'مكتب 5',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 3, // Replace with the desired workspaceType_id
            'name' => 'Workspace-6x',
            'title' => 'غرفة اجتماعات',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        //iiiiiiiiiiixxxxxxxxxxxxxxxxxxxxxiiiiiiiiiiiiiiii
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace-y1',
            'title' => 'مكتب 1',
            'description' => 'Workspace Description',
            'maxPeople' => 2, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace-y2',
            'title' => ' مكتب 2 ',
            'description' => 'Workspace Description',
            'maxPeople' => 5, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 2, // Replace with the desired workspaceType_id
            'name' => 'Workspace-y3',
            'title' => 'مكتب 3',
            'description' => 'Workspace Description',
            'maxPeople' => 18, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 3, // Replace with the desired workspaceType_id
            'name' => 'room-y1',
            'title' => 'غرفة اجتماعات',
            'description' => 'Workspace Description',
            'maxPeople' => 20, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 2, // Replace with the desired workspaceType_id
            'name' => 'Workspace-y4',
            'title' => 'مكتب 4',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace-y5',
            'title' => 'مكتب 5',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 3, // Replace with the desired workspaceType_id
            'name' => 'room-y2',
            'title' => 'غرفة اجتماعات الكبرى',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        // iiiiiiiiiiiiixxxxxxxxxxxxxxxxxxxxiiiiiiiiiiiiiiiiiii
        Workspace::create([
            'provider_id' => 3, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace-z1',
            'title' => 'مكتب 4',
            'description' => 'Workspace Description',
            'maxPeople' => 3, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 3, // Replace with the desired provider_id
            'workspaceType_id' => 2, // Replace with the desired workspaceType_id
            'name' => 'Workspace-z2',
            'title' => 'مكتب 5',
            'description' => 'Workspace Description',
            'maxPeople' => 5, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 3, // Replace with the desired provider_id
            'workspaceType_id' => 3, // Replace with the desired workspaceType_id
            'name' => 'room-z1',
            'title' => 'غرفة اجتماعات',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
    }
}
