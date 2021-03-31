<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // default permissions
        $permissions = [
            'role.index',
            'role.create',
            'role.edit',
            'role.delete',
            'user.index',
            'user.create',
            'user.edit',
            'user.delete',
            'permission.index',
            'permission.create',
            'permission.edit',
            'permission.delete',
            'product.index',
            'product.create',
            'product.edit',
            'product.delete',
            'bug.index',
            'bug.delete',
            'audit.index',
            'audit.delete',
            'api.uploadMedia'
            ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // default role
        $role = Role::create([
            'id'    => 2,
            'name'  => 'super-admin'
        ]);

        // sync permissions to role
        $role->syncPermissions($permissions);

    }
}
