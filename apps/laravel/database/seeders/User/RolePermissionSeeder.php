<?php

namespace Database\Seeders\User;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Permissions
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        // Roles
        $super_admin = Role::create(['name' => 'super_admin']);
        $manager = Role::create(['name' => 'manager']);

        // Assign permissions
        $super_admin->givePermissionTo(Permission::all());

        $manager->givePermissionTo([
            'create user',
            'update user',
            'delete user',
        ]);
    }
}
