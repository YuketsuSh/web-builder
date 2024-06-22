<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'create pages']);
        Permission::create(['name' => 'edit pages']);
        Permission::create(['name' => 'delete pages']);
        Permission::create(['name' => 'modify site']);

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(['edit users', 'create pages', 'edit pages', 'delete pages', 'modify site', 'delete users']);

        $moderator = Role::create(['name' => 'moderator']);
        $moderator->givePermissionTo(['edit users']);

        $user = Role::create(['name' => 'user']);
    }
}
