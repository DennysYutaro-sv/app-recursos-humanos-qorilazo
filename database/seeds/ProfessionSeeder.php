<?php

use Illuminate\Database\Seeder;
use App\Profession;

class ProfessionSeeder extends Seeder
{

    public function run()
    {
        //
        Profession::create([
            'profession_name' => 'CONTADOR'
        ]);
        Profession::create([
            'profession_name' => 'ABOGADO'
        ]);
        Profession::create([
            'profession_name' => 'INGENIERO DE SISTEMAS'
        ]);
    }
}
