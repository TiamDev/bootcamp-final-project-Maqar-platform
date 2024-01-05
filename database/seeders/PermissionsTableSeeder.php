<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Account\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        // Create permissions
        Permission::create([
            'name' => 'access-dashboard',
            'label' => 'الوصول للوحة التحكم',
        ]);
        Permission::create([
            'name' => 'edit-own-content',
            'label' => 'تعديل المحتوى',
        ]);
        Permission::create([
            'name' => 'add-user',
            'label' => 'اضافة مستخدم',
        ]);
        // Permission::create([
        //     'name' => 'edite-user',
        //     'label' => 'تعديل مستخدم',
        // ]);
        Permission::create([
            'name' => 'delete-user',
            'label' => 'حذف مستخدم',
        ]);
        /************************************ */
        Permission::create([
            'name' => 'add-workspace',
            'label' => 'اضافة مساحة',
        ]);
        Permission::create([
            'name' => 'edit-workspace',
            'label' => 'تعديل مساحة',
        ]);
        Permission::create([
            'name' => 'block-workspace',
            'label' => ' حظر مساحة ',
        ]);

        /*****************************/
        Permission::create([
            'name' => 'add-recervation',
            'label' => 'اضافة حجز',
        ]);
        Permission::create([
            'name' => 'confirm-recervation',
            'label' => 'تاكيد حجز',
        ]);
        Permission::create([
            'name' => 'cancel-recervation',
            'label' => 'الغاء حجز',
        ]);

        Permission::create([
            'name' => 'edit-recervation',
            'label' => ' تعديل حجز',
        ]);
        /**************************************** */
        Permission::create([
            'name' => 'block-provider',
            'label' => 'حظر مزود مساحات',
        ]);
        // Permission::create([
        //     'name' => 'block-workspace',
        //     'label' => ' حظر مساحة ',
        // ]);
        /*******************************/
        Permission::create([
            'name' => 'accept-request',
            'label' => 'قبول طلبات الانضمام ',
        ]);
        Permission::create([
            'name' => 'reqect-request',
            'label' => 'رفض طلبات الانضمام ',
        ]);

        // Create additional permissions as needed
        // ...
        Permission::create([
            'name' => 'edit-provider-content',
            'label' => 'تعديل محتوى المزود',
        ]);
    }
}
