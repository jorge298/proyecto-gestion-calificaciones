<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear permisos
        Permission::create(['name' => 'view notes']);
        Permission::create(['name' => 'edit notes']);
        Permission::create(['name' => 'delete notes']);

        // Crear roles y asignar permisos
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo(['view notes', 'edit notes', 'delete notes']);

        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo(['view notes']);
    }
}
