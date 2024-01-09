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
            'name' => 'Workspace_x',
            'title' => 'مكتب 1',
            'description' => 'Workspace Description',
            'maxPeople' => 2, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace_y',
            'title' => ' مكتب 2 ',
            'description' => 'Workspace Description',
            'maxPeople' => 5, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 2, // Replace with the desired workspaceType_id
            'name' => 'Workspace_z',
            'title' => 'مكتب 3',
            'description' => 'Workspace Description',
            'maxPeople' => 18, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 3, // Replace with the desired workspaceType_id
            'name' => 'Workspace_w',
            'title' => 'غرفة اجتماعات',
            'description' => 'Workspace Description',
            'maxPeople' => 20, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 2, // Replace with the desired workspaceType_id
            'name' => 'Workspace_v',
            'title' => 'مكتب 4',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace_t',
            'title' => 'مكتب 5',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 1, // Replace with the desired provider_id
            'workspaceType_id' => 3, // Replace with the desired workspaceType_id
            'name' => 'Workspace_p',
            'title' => 'غرفة اجتماعات',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        //iiiiiiiiiiixxxxxxxxxxxxxxxxxxxxxiiiiiiiiiiiiiiii
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace_x2',
            'title' => 'مكتب 1',
            'description' => 'Workspace Description',
            'maxPeople' => 2, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace_y2',
            'title' => ' مكتب 2 ',
            'description' => 'Workspace Description',
            'maxPeople' => 5, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 2, // Replace with the desired workspaceType_id
            'name' => 'Workspace_z2',
            'title' => 'مكتب 3',
            'description' => 'Workspace Description',
            'maxPeople' => 18, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 3, // Replace with the desired workspaceType_id
            'name' => 'Workspace_w2',
            'title' => 'غرفة اجتماعات',
            'description' => 'Workspace Description',
            'maxPeople' => 20, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 2, // Replace with the desired workspaceType_id
            'name' => 'Workspace_v2',
            'title' => 'مكتب 4',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace_t2',
            'title' => 'مكتب 5',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 2, // Replace with the desired provider_id
            'workspaceType_id' => 3, // Replace with the desired workspaceType_id
            'name' => 'Workspace_p2',
            'title' => 'غرفة اجتماعات',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        // iiiiiiiiiiiiixxxxxxxxxxxxxxxxxxxxiiiiiiiiiiiiiiiiiii
        Workspace::create([
            'provider_id' => 3, // Replace with the desired provider_id
            'workspaceType_id' => 1, // Replace with the desired workspaceType_id
            'name' => 'Workspace_v3',
            'title' => 'مكتب 4',
            'description' => 'Workspace Description',
            'maxPeople' => 3, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 3, // Replace with the desired provider_id
            'workspaceType_id' => 2, // Replace with the desired workspaceType_id
            'name' => 'Workspace_t3',
            'title' => 'مكتب 5',
            'description' => 'Workspace Description',
            'maxPeople' => 5, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
        Workspace::create([
            'provider_id' => 3, // Replace with the desired provider_id
            'workspaceType_id' => 3, // Replace with the desired workspaceType_id
            'name' => 'Workspace_p3',
            'title' => 'غرفة اجتماعات',
            'description' => 'Workspace Description',
            'maxPeople' => 10, // Replace with the desired maximum number of people
            'area' => 100, // Replace with the desired area
        ]);
    }
}
