<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account\User;
use App\Models\Account\Role;
use App\Models\Account\Permission;

class RoleUsersAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Assign permissions to roles
        $superadminPermissions = [
            'access-dashboard',
            'edit-own-content',
            'add-user',
            'delete-user',
            'block-provider',
            'accept-request',
            'reqect-request',
            // Add more permissions for the admin role
        ];
        $adminPermissions = [
            'access-dashboard',
            'edit-own-content',
            'add-user',
            'delete-user',
            'add-workspace',
            'edit-workspace',
            'block-workspace',

            // Add more permissions for the admin role
        ];
        $reception = [
            'access-dashboard',
            'edit-own-content',
            'add-recervation',
            'edit-recervation',
            'cancel-recervation',
            'confirm-recervation',



        ];
        $contentAdminPermissions = [
            'access-dashboard',
            'edit-own-content',
            'edit-provider-content',
            // Add permissions for the user role
        ];

        $clientPermissions = [
            'access-dashboard',
            'edit-own-content',
            'add-recervation',
            'cancel-recervation',
            // Add permissions for the user role
        ];

        // $adminRole = Role::where('name', 'admin')->first();
        // $adminRole->permissions()->attach($this->getPermissionIds($adminPermissions));
        // $adminRole->save();

        // $userRole = Role::where('name', 'user')->first();
        // $userRole->permissions()->attach($this->getPermissionIds($userPermissions));
        // $userRole->save();

        // Assign roles to the permission
        for ($i = 0; $i < sizeof($superadminPermissions); $i++) {
            // Assign roles to the user

            $permissionName = $superadminPermissions[$i];
            $permission = Permission::where('name', $permissionName)->first();
            $permission->roles()->attach(Role::where('name', 'super-admin')->first()->id);
            $permission->save();
        }
        for ($i = 0; $i < sizeof($adminPermissions); $i++) {
            // Assign roles to the user

            $permissionName = $adminPermissions[$i];
            $permission = Permission::where('name', $permissionName)->first();
            $permission->roles()->attach(Role::where('name', 'admin')->first()->id);
            $permission->save();
        }
        for ($i = 0; $i < sizeof($reception); $i++) {
            // Assign roles to the user

            $permissionName = $reception[$i];
            $permission = Permission::where('name', $permissionName)->first();
            $permission->roles()->attach(Role::where('name', 'reception')->first()->id);
            $permission->save();
        }
        for ($i = 0; $i < sizeof($contentAdminPermissions); $i++) {
            // Assign roles to the user

            $permissionName = $contentAdminPermissions[$i];
            $permission = Permission::where('name', $permissionName)->first();
            $permission->roles()->attach(Role::where('name', 'content-admin')->first()->id);
            $permission->save();
        }
        for ($i = 0; $i < sizeof($clientPermissions); $i++) {
            // Assign roles to the user

            $permissionName = $clientPermissions[$i];
            $permission = Permission::where('name', $permissionName)->first();
            $permission->roles()->attach(Role::where('name', 'client')->first()->id);
            $permission->save();
        }

        // // Assign roles to the permission
        // $permissionName = 'edit-any-content';
        // $permission = Permission::where('name', $permissionName)->first();
        // $permission->roles()->attach(Role::where('name', 'admin')->first()->id);
        // $permission->save();

        //
        // Assign roles to the user
        $email1 = 'fatima@example.com';
        $user1 = User::where('email', $email1)->first();
        $user1->roles()->attach(Role::where('name', 'super-admin')->first()->id);
        $user1->save();
        $email3 = 'ragad@example.com';
        $user3 = User::where('email', $email3)->first();
        $user3->roles()->attach(Role::where('name', 'client')->first()->id);
        $user3->save();
        //مزودي خدمة
        $email2 = 'rawaa@example.com';
        $user2 = User::where('email', $email2)->first();
        $user2->roles()->attach(Role::where('name', 'admin')->first()->id);
        $user2->save();
        $email3 = 'fofo1@example.com';
        $user3 = User::where('email', $email3)->first();
        $user3->roles()->attach(Role::where('name', 'admin')->first()->id);
        $user3->save();
        $email3 = 'soso1@example.com';
        $user3 = User::where('email', $email3)->first();
        $user3->roles()->attach(Role::where('name', 'admin')->first()->id);
        $user3->save();
    }

    private function getPermissionIds(array $permissionNames)
    {
        return Permission::whereIn('name', $permissionNames)->pluck('id');
    }
}
