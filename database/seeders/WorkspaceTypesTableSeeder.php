<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maqar\WorkspaceType;

class WorkspaceTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkspaceType::create([
            'name' => 'private_office',
            'label' => 'مكتب خاص',
            'description' => ' مساحة مخصصة  لتلبية احتياجات ومتطلبات الفرد يمكنك من اداء أغراض العمل أو الدراسة أو الهوايات أو أي نشاط يتطلب مكان هادئ ومريح للتركيز والإنتاجية.',
        ]);
        WorkspaceType::create([
            'name' => 'shared_office',
            'label' => 'مكتب مشترك',
            'description' => ' مساحة تعمل على مشاركتها بين عدة أفراد أو فرق في بيئة عمل مشتركة. يقدم مكتب المشاركة فرصة للأشخاص المختلفين للعمل معًا في نفس المكان والتواصل وتبادل الأفكار والموارد.'

        ]);
        WorkspaceType::create([
            'name' => 'Meetings_room',
            'label' => 'غرفة إجتماعات',
            'description' => 'مساحة مخصصة تستخدم لعقد الاجتماعات والمناقشات بين الأشخاص في بيئة عمل أو مكان آخر. تهدف غرفة الاجتماعات إلى توفير بيئة ملائمة ومجهزة للتواصل واتخاذ القرارات وتبادل الأفكار والمعلومات.'
        ]);
    }
}
