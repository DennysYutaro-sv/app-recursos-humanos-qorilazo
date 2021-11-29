<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        //creamos los Departments requeridos
        Department::create([
            'name_departamento' => 'Amazonas'
        ]);
        Department::create([
            'name_departamento' => 'Áncash'
        ]); 
        Department::create([
            'name_departamento' => 'Apurímac'
        ]); 
        Department::create([
            'name_departamento' => 'Arequipa'
        ]); 
        Department::create([
            'name_departamento' => 'Ayacucho'
        ]); 
        Department::create([
            'name_departamento' => 'Cajamarca'
        ]); 
        Department::create([
            'name_departamento' => 'Callao'
        ]); 
        Department::create([
            'name_departamento' => 'Cusco'
        ]); 
        Department::create([
            'name_departamento' => 'Huancavelica'
        ]); 
        Department::create([
            'name_departamento' => 'Huánuco'
        ]); 
        Department::create([
            'name_departamento' => 'Ica'
        ]); 
        Department::create([
            'name_departamento' => 'Junín'
        ]); 
        Department::create([
            'name_departamento' => 'La Libertad'
        ]); 
        Department::create([
            'name_departamento' => 'Lambayeque'
        ]); 
        Department::create([
            'name_departamento' => 'Lima'
        ]); 
        Department::create([
            'name_departamento' => 'Loreto'
        ]); 
        Department::create([
            'name_departamento' => 'Madre de Dios'
        ]); 
        Department::create([
            'name_departamento' => 'Moquegua'
        ]); 
        Department::create([
            'name_departamento' => 'Pasco'
        ]); 
        Department::create([
            'name_departamento' => 'Piura'
        ]); 
        Department::create([
            'name_departamento' => 'Puno'
        ]); 
        Department::create([
            'name_departamento' => 'San Martín'
        ]); 
        Department::create([
            'name_departamento' => 'Tacna'
        ]);
        Department::create([
            'name_departamento' => 'Tumbes'
        ]);
        Department::create([
            'name_departamento' => 'Ucayali'
        ]);
    }
}
