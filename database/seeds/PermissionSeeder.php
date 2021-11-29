<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    public function run()
    {
    	Permission::create([
            'name' => 'access_dashboard',
            'description' => 'Acceder al dashboard' // Permiso para acceder al dashboard
        ]);
        //Modulo permissions
        Permission::create([
            'name' => 'access_permission',
            'description' => 'Gestionar Roles y Permisos' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'list_user',
            'description' => 'Listar usuarios' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'create_user',
            'description' => 'Crear usuarios' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'update_user',
            'description' => 'Modificar usuarios' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'destroy_user',
            'description' => 'Eliminar usuarios' // Permiso para gestionar roles y permisos
        ]);

        Permission::create([
            'name' => 'list_role',
            'description' => 'Listar Roles' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'create_role',
            'description' => 'Crear roles' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'update_role',
            'description' => 'Modificar roles' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'destroy_role',
            'description' => 'Eliminar roles' // Permiso para gestionar roles y permisos
        ]);

        Permission::create([
            'name' => 'list_permission',
            'description' => 'Listar Permisos' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'create_permission',
            'description' => 'Crear Permisos' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'update_permission',
            'description' => 'Modificar Permisos' // Permiso para gestionar roles y permisos
        ]);
        Permission::create([
            'name' => 'destroy_permission',
            'description' => 'Eliminar Permisos' // Permiso para gestionar roles y permisos
        ]);
    	
        //Módulo employees
        Permission::create([
            'name' => 'create_employee',
            'description' => 'Ver formulario para crear personal' // Permiso para ver formulario
        ]);
        Permission::create([
            'name' => 'store_employee',
            'description' => 'Guardar información personal' // Permiso para guardar empleado
        ]);
        Permission::create([
            'name' => 'edit_employee',
            'description' => 'Ver formulario para editar personal'
        ]);
        Permission::create([
            'name' => 'update_employee',
            'description' => 'Actualizar datos de personal' 
        ]);
        Permission::create([
            'name' => 'destroy_employee',
            'description' => 'Dar de baja a personal' 
        ]);
        Permission::create([
            'name' => 'restore_employee',
            'description' => 'Restaurar personal' //see restore form and restore employee
        ]);
        //Modulo contract
        //Modulo professions
        //Modulo reports
        //
    }
}
