<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Coach']);

        $permission1 = Permission::create(['name' => 'crate.users', 'description' => 'Crear usuarios']);
        $permission4 = Permission::create(['name' => 'read.users', 'description' => 'Ver Usuarios']);
        $permission2 = Permission::create(['name' => 'edit.users', 'description' => 'Editar usuarios']);
        $permission3 = Permission::create(['name' => 'delete.users', 'description' => 'Eliminar usuarios']);

        $permission4 = Permission::create(['name' => 'crate.rendimiento', 'description' => 'Crear rendimientos']);
        $permission5 = Permission::create(['name' => 'read.rendimiento', 'description' => 'Ver rendimientos']);
        $permission6 = Permission::create(['name' => 'edit.rendimiento', 'description' => 'Editar rendimientos']);
        $permission7 = Permission::create(['name' => 'delete.rendimiento', 'description' => 'Eliminar rendimientos']);

        $permission8 = Permission::create(['name' => 'read.pagos', 'description' => 'Ver pagos']);
        $permission9 = Permission::create(['name' => 'edit.pagos', 'description' => 'Editar pagos']);
        $permission10 = Permission::create(['name' => 'delete.pagos', 'description' => 'Eliminar pagos']);

        $permission11 = Permission::create(['name' => 'read.subs', 'description' => 'Ver subscripciones']);
        $permission12 = Permission::create(['name' => 'edit.subs', 'description' => 'Editar subscripciones']);

        $role1->syncPermissions([$permission1, $permission2, $permission3, $permission4]);
        $role2->syncPermissions([$permission4]);
    }
}
