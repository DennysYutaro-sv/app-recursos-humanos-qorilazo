<?php

use Illuminate\Database\Seeder;
use App\Agency;

class AgencySeeder extends Seeder
{
    public function run()
    {
        //Agregamos las Agencys de la coopac
        Agency::create([
            'id' => '101',
            'agency_name' => 'Santo Tomas',
            'agency_address' => 'Calle Bolívar s/n',
            'departamento_id' => '8',
            'provincia_id' => '74',
            'distrito_id' => '745'
        ]);
        Agency::create([
            'id' => '102',
            'agency_name' => 'Urubamba',
            'agency_address' => 'Calle Cesar Vallejo A-2',
            'departamento_id' => '8',
            'provincia_id' => '80',
            'distrito_id' => '802'
        ]);
        Agency::create([
            'id' => '103',
            'agency_name' => 'Arequipa',
            'agency_address' => 'Villa Faucett Mz. A Lt. 51',
            'departamento_id' => '4',
            'provincia_id' => '35',
            'distrito_id' => '338'
        ]);
        //hasta aca me quede
        Agency::create([
            'id' => '104',
            'agency_name' => 'Marcona',
            'agency_address' => 'Urb. La Esmeralda, Mz. E Lt. 21',
            'departamento_id' => '11',
            'provincia_id' => '101',
            'distrito_id' => '1021'
        ]);
        Agency::create([
            'id' => '105',
            'agency_name' => 'Velille',
            'agency_address' => 'Av. Miguel Grau s/n',
            'departamento_id' => '8',
            'provincia_id' => '74',
            'distrito_id' => '752'
        ]);
        Agency::create([
            'id' => '106',
            'agency_name' => 'Pedregal',
            'agency_address' => 'C.P. El pedregal, Calle Characato Mz. D, Lt. 21',
            'departamento_id' => '4',
            'provincia_id' => '39',
            'distrito_id' => '418'
        ]);
        Agency::create([
            'id' => '109',
            'agency_name' => 'La Joya',
            'agency_address' => 'Calle Necochea',
            'departamento_id' => '4',
            'provincia_id' => '35',
            'distrito_id' => '342'
        ]);
        Agency::create([
            'id' => '110',
            'agency_name' => 'Anta',
            'agency_address' => 'Jr. Jaquijahuana N° 719.',
            'departamento_id' => '8',
            'provincia_id' => '70',
            'distrito_id' => '712'
        ]);
        Agency::create([
            'id' => '111',
            'agency_name' => 'Livitaca',
            'agency_address' => 'Plaza de armas s/n',
            'departamento_id' => '8',
            'provincia_id' => '74',
            'distrito_id' => '749'
        ]);
        Agency::create([
            'id' => '112',
            'agency_name' => 'San Sebastian',
            'agency_address' => 'Urb. Cachimayo F-4',
            'departamento_id' => '8',
            'provincia_id' => '68',
            'distrito_id' => '701'
        ]);
        Agency::create([
            'id' => '113',
            'agency_name' => 'Abancay',
            'agency_address' => 'Jr. Unión 277',
            'departamento_id' => '3',
            'provincia_id' => '28',
            'distrito_id' => '251'
        ]);
    }
}