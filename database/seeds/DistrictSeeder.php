<?php

use Illuminate\Database\Seeder;
use App\District;

class DistrictSeeder extends Seeder
{
    public function run()
    {
        //Creamos las Districts requeridas relacionados con su respectiva provincia_id
        //-----------------
        District::create([
            'name_distrito' => 'Chachapoyas',
            'cod_ubig' => '1',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Asunción',
            'cod_ubig' => '2',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Balsas',
            'cod_ubig' => '3',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Cheto',
            'cod_ubig' => '4',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Chiliquin',
            'cod_ubig' => '5',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Chuquibamba',
            'cod_ubig' => '6',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Granada',
            'cod_ubig' => '7',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Huancas',
            'cod_ubig' => '8',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'La Jalca',
            'cod_ubig' => '9',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Leimebamba',
            'cod_ubig' => '10',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Levanto',
            'cod_ubig' => '11',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Magdalena',
            'cod_ubig' => '12',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Mariscal Castilla',
            'cod_ubig' => '13',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Molinopampa',
            'cod_ubig' => '14',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Montevideo',
            'cod_ubig' => '15',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Olleros',
            'cod_ubig' => '16',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Quinjalca',
            'cod_ubig' => '17',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'San Francisco de Daguas',
            'cod_ubig' => '18',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'San Isidro de Maino',
            'cod_ubig' => '19',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Soloco',
            'cod_ubig' => '20',
            'provincia_id' => '1'
        ]);
        District::create([
            'name_distrito' => 'Sonche',
            'cod_ubig' => '21',
            'provincia_id' => '1'
        ]);


        District::create([
            'name_distrito' => 'Bagua',
            'cod_ubig' => '1',
            'provincia_id' => '2'
        ]);
        District::create([
            'name_distrito' => 'Aramango',
            'cod_ubig' => '2',
            'provincia_id' => '2'
        ]);
        District::create([
            'name_distrito' => 'Copallin',
            'cod_ubig' => '3',
            'provincia_id' => '2'
        ]);
        District::create([
            'name_distrito' => 'El Parco',
            'cod_ubig' => '4',
            'provincia_id' => '2'
        ]);
        District::create([
            'name_distrito' => 'Imaza',
            'cod_ubig' => '5',
            'provincia_id' => '2'
        ]);
        District::create([
            'name_distrito' => 'La Peca',
            'cod_ubig' => '6',
            'provincia_id' => '2'
        ]);


        District::create([
            'name_distrito' => 'Jumbilla',
            'cod_ubig' => '1',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'Chisquilla',
            'cod_ubig' => '2',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'Churuja',
            'cod_ubig' => '3',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'Corosha',
            'cod_ubig' => '4',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'Cuispes',
            'cod_ubig' => '5',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'Florida',
            'cod_ubig' => '6',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'Jazan',
            'cod_ubig' => '7',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'Recta',
            'cod_ubig' => '8',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'San Carlos',
            'cod_ubig' => '9',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'Shipasbamba',
            'cod_ubig' => '10',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'Valera',
            'cod_ubig' => '11',
            'provincia_id' => '3'
        ]);
        District::create([
            'name_distrito' => 'Yambrasbamba',
            'cod_ubig' => '12',
            'provincia_id' => '3'
        ]);


        District::create([
            'name_distrito' => 'Nieva',
            'cod_ubig' => '1',
            'provincia_id' => '4'
        ]);
        District::create([
            'name_distrito' => 'El Cenepa',
            'cod_ubig' => '2',
            'provincia_id' => '4'
        ]);
        District::create([
            'name_distrito' => 'Río Santiago',
            'cod_ubig' => '3',
            'provincia_id' => '4'
        ]);


        District::create([
            'name_distrito' => 'Lamud',
            'cod_ubig' => '1',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Camporredondo',
            'cod_ubig' => '2',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Cocabamba',
            'cod_ubig' => '3',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Colcamar',
            'cod_ubig' => '4',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Conila',
            'cod_ubig' => '5',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Inguilpata',
            'cod_ubig' => '6',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Longuita',
            'cod_ubig' => '7',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Lonya Chico',
            'cod_ubig' => '8',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Luya',
            'cod_ubig' => '9',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Luya Viejo',
            'cod_ubig' => '10',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'María',
            'cod_ubig' => '11',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Ocalli',
            'cod_ubig' => '12',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Ocumal',
            'cod_ubig' => '13',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Pisuquia',
            'cod_ubig' => '14',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Providencia',
            'cod_ubig' => '15',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'San Cristóbal',
            'cod_ubig' => '16',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'San Francisco de Yeso',
            'cod_ubig' => '17',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'San Jerónimo',
            'cod_ubig' => '18',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Lopecancha',
            'cod_ubig' => '19',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Santa Catalina',
            'cod_ubig' => '20',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Santo Tomas',
            'cod_ubig' => '21',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Tingo',
            'cod_ubig' => '22',
            'provincia_id' => '5'
        ]);
        District::create([
            'name_distrito' => 'Trita',
            'cod_ubig' => '23',
            'provincia_id' => '5'
        ]);


        District::create([
            'name_distrito' => 'San Nicolás',
            'cod_ubig' => '1',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Chirimoto',
            'cod_ubig' => '2',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Cochamal',
            'cod_ubig' => '3',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Huambo',
            'cod_ubig' => '4',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Limabamba',
            'cod_ubig' => '5',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Longar',
            'cod_ubig' => '6',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Mariscal Benavides',
            'cod_ubig' => '7',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Milpuc',
            'cod_ubig' => '8',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Omia',
            'cod_ubig' => '9',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa',
            'cod_ubig' => '10',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Totora',
            'cod_ubig' => '11',
            'provincia_id' => '6'
        ]);
        District::create([
            'name_distrito' => 'Vista Alegre',
            'cod_ubig' => '12',
            'provincia_id' => '6'
        ]);


        District::create([
            'name_distrito' => 'Bagua Grande',
            'cod_ubig' => '1',
            'provincia_id' => '7'
        ]);
        District::create([
            'name_distrito' => 'Cajaruro',
            'cod_ubig' => '2',
            'provincia_id' => '7'
        ]);
        District::create([
            'name_distrito' => 'Cumba',
            'cod_ubig' => '3',
            'provincia_id' => '7'
        ]);
        District::create([
            'name_distrito' => 'El Milagro',
            'cod_ubig' => '4',
            'provincia_id' => '7'
        ]);
        District::create([
            'name_distrito' => 'Jamalca',
            'cod_ubig' => '5',
            'provincia_id' => '7'
        ]);
        District::create([
            'name_distrito' => 'Lonya Grande',
            'cod_ubig' => '6',
            'provincia_id' => '7'
        ]);
        District::create([
            'name_distrito' => 'Yamon',
            'cod_ubig' => '7',
            'provincia_id' => '7'
        ]);


        District::create([
            'name_distrito' => 'Huaraz',
            'cod_ubig' => '1',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'Cochabamba',
            'cod_ubig' => '2',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'Colcabamba',
            'cod_ubig' => '3',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'Huanchay',
            'cod_ubig' => '4',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'Independencia',
            'cod_ubig' => '5',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'Jangas',
            'cod_ubig' => '6',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'La Libertad',
            'cod_ubig' => '7',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'Olleros',
            'cod_ubig' => '8',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'Pampas Grande',
            'cod_ubig' => '9',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'Pariacoto',
            'cod_ubig' => '10',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'Pira',
            'cod_ubig' => '11',
            'provincia_id' => '8'
        ]);
        District::create([
            'name_distrito' => 'Tarica',
            'cod_ubig' => '12',
            'provincia_id' => '8'
        ]);


        District::create([
            'name_distrito' => 'Aija',
            'cod_ubig' => '1',
            'provincia_id' => '9'
        ]);
        District::create([
            'name_distrito' => 'Coris',
            'cod_ubig' => '2',
            'provincia_id' => '9'
        ]);
        District::create([
            'name_distrito' => 'Huacllan',
            'cod_ubig' => '3',
            'provincia_id' => '9'
        ]);
        District::create([
            'name_distrito' => 'La Merced',
            'cod_ubig' => '4',
            'provincia_id' => '9'
        ]);
        District::create([
            'name_distrito' => 'Succha',
            'cod_ubig' => '5',
            'provincia_id' => '9'
        ]);


        District::create([
            'name_distrito' => 'Llamellin',
            'cod_ubig' => '1',
            'provincia_id' => '10'
        ]);
        District::create([
            'name_distrito' => 'Aczo',
            'cod_ubig' => '2',
            'provincia_id' => '10'
        ]);
        District::create([
            'name_distrito' => 'Chaccho',
            'cod_ubig' => '3',
            'provincia_id' => '10'
        ]);
        District::create([
            'name_distrito' => 'Chingas',
            'cod_ubig' => '4',
            'provincia_id' => '10'
        ]);
        District::create([
            'name_distrito' => 'Mirgas',
            'cod_ubig' => '5',
            'provincia_id' => '10'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Rontoy',
            'cod_ubig' => '6',
            'provincia_id' => '10'
        ]);


        District::create([
            'name_distrito' => 'Chacas',
            'cod_ubig' => '1',
            'provincia_id' => '11'
        ]);
        District::create([
            'name_distrito' => 'Acochaca',
            'cod_ubig' => '2',
            'provincia_id' => '11'
        ]);


        District::create([
            'name_distrito' => 'Chiquian',
            'cod_ubig' => '1',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Abelardo Pardo Lezameta',
            'cod_ubig' => '2',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Antonio Raymondi',
            'cod_ubig' => '3',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Aquia',
            'cod_ubig' => '4',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Cajacay',
            'cod_ubig' => '5',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Canis',
            'cod_ubig' => '6',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Colquioc',
            'cod_ubig' => '7',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Huallanca',
            'cod_ubig' => '8',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Huasta',
            'cod_ubig' => '9',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Huayllacayan',
            'cod_ubig' => '10',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'La Primavera',
            'cod_ubig' => '11',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Mangas',
            'cod_ubig' => '12',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Pacllon',
            'cod_ubig' => '13',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'San Miguel de Corpanqui',
            'cod_ubig' => '14',
            'provincia_id' => '12'
        ]);
        District::create([
            'name_distrito' => 'Ticllos',
            'cod_ubig' => '15',
            'provincia_id' => '12'
        ]);


        District::create([
            'name_distrito' => 'Carhuaz',
            'cod_ubig' => '1',
            'provincia_id' => '13'
        ]);
        District::create([
            'name_distrito' => 'Acopampa',
            'cod_ubig' => '2',
            'provincia_id' => '13'
        ]);
        District::create([
            'name_distrito' => 'Amashca',
            'cod_ubig' => '3',
            'provincia_id' => '13'
        ]);
        District::create([
            'name_distrito' => 'Anta',
            'cod_ubig' => '4',
            'provincia_id' => '13'
        ]);
        District::create([
            'name_distrito' => 'Ataquero',
            'cod_ubig' => '5',
            'provincia_id' => '13'
        ]);
        District::create([
            'name_distrito' => 'Marcara',
            'cod_ubig' => '6',
            'provincia_id' => '13'
        ]);
        District::create([
            'name_distrito' => 'Pariahuanca',
            'cod_ubig' => '7',
            'provincia_id' => '13'
        ]);
        District::create([
            'name_distrito' => 'San Miguel de Aco',
            'cod_ubig' => '8',
            'provincia_id' => '13'
        ]);
        District::create([
            'name_distrito' => 'Shilla',
            'cod_ubig' => '9',
            'provincia_id' => '13'
        ]);
        District::create([
            'name_distrito' => 'Tinco',
            'cod_ubig' => '10',
            'provincia_id' => '13'
        ]);
        District::create([
            'name_distrito' => 'Yungar',
            'cod_ubig' => '11',
            'provincia_id' => '13'
        ]);


        District::create([
            'name_distrito' => 'San Luis',
            'cod_ubig' => '1',
            'provincia_id' => '14'
        ]);
        District::create([
            'name_distrito' => 'San Nicolás',
            'cod_ubig' => '2',
            'provincia_id' => '14'
        ]);
        District::create([
            'name_distrito' => 'Yauya',
            'cod_ubig' => '3',
            'provincia_id' => '14'
        ]);


        District::create([
            'name_distrito' => 'Casma',
            'cod_ubig' => '1',
            'provincia_id' => '15'
        ]);
        District::create([
            'name_distrito' => 'Buena Vista Alta',
            'cod_ubig' => '2',
            'provincia_id' => '15'
        ]);
        District::create([
            'name_distrito' => 'Comandante Noel',
            'cod_ubig' => '3',
            'provincia_id' => '15'
        ]);
        District::create([
            'name_distrito' => 'Yautan',
            'cod_ubig' => '4',
            'provincia_id' => '15'
        ]);


        District::create([
            'name_distrito' => 'Corongo',
            'cod_ubig' => '1',
            'provincia_id' => '16'
        ]);
        District::create([
            'name_distrito' => 'Aco',
            'cod_ubig' => '2',
            'provincia_id' => '16'
        ]);
        District::create([
            'name_distrito' => 'Bambas',
            'cod_ubig' => '3',
            'provincia_id' => '16'
        ]);
        District::create([
            'name_distrito' => 'Cusca',
            'cod_ubig' => '4',
            'provincia_id' => '16'
        ]);
        District::create([
            'name_distrito' => 'La Pampa',
            'cod_ubig' => '5',
            'provincia_id' => '16'
        ]);
        District::create([
            'name_distrito' => 'Yanac',
            'cod_ubig' => '6',
            'provincia_id' => '16'
        ]);
        District::create([
            'name_distrito' => 'Yupan',
            'cod_ubig' => '7',
            'provincia_id' => '16'
        ]);


        District::create([
            'name_distrito' => 'Huari',
            'cod_ubig' => '1',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Anra',
            'cod_ubig' => '2',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Cajay',
            'cod_ubig' => '3',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Chavin de Huantar',
            'cod_ubig' => '4',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Huacachi',
            'cod_ubig' => '5',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Huacchis',
            'cod_ubig' => '6',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Huachis',
            'cod_ubig' => '7',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Huantar',
            'cod_ubig' => '8',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Masin',
            'cod_ubig' => '9',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Paucas',
            'cod_ubig' => '10',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Ponto',
            'cod_ubig' => '11',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Rahuapampa',
            'cod_ubig' => '12',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Rapayan',
            'cod_ubig' => '13',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'San Marcos',
            'cod_ubig' => '14',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Chana',
            'cod_ubig' => '15',
            'provincia_id' => '17'
        ]);
        District::create([
            'name_distrito' => 'Uco',
            'cod_ubig' => '16',
            'provincia_id' => '17'
        ]);


        District::create([
            'name_distrito' => 'Huarmey',
            'cod_ubig' => '1',
            'provincia_id' => '18'
        ]);
        District::create([
            'name_distrito' => 'Cochapeti',
            'cod_ubig' => '2',
            'provincia_id' => '18'
        ]);
        District::create([
            'name_distrito' => 'Culebras',
            'cod_ubig' => '3',
            'provincia_id' => '18'
        ]);
        District::create([
            'name_distrito' => 'Huayan',
            'cod_ubig' => '4',
            'provincia_id' => '18'
        ]);
        District::create([
            'name_distrito' => 'Malvas',
            'cod_ubig' => '5',
            'provincia_id' => '18'
        ]);


        District::create([
            'name_distrito' => 'Caraz',
            'cod_ubig' => '1',
            'provincia_id' => '19'
        ]);
        District::create([
            'name_distrito' => 'Huallanca',
            'cod_ubig' => '2',
            'provincia_id' => '19'
        ]);
        District::create([
            'name_distrito' => 'Huata',
            'cod_ubig' => '3',
            'provincia_id' => '19'
        ]);
        District::create([
            'name_distrito' => 'Huaylas',
            'cod_ubig' => '4',
            'provincia_id' => '19'
        ]);
        District::create([
            'name_distrito' => 'Mato',
            'cod_ubig' => '5',
            'provincia_id' => '19'
        ]);
        District::create([
            'name_distrito' => 'Pamparomas',
            'cod_ubig' => '6',
            'provincia_id' => '19'
        ]);
        District::create([
            'name_distrito' => 'Pueblo Libre',
            'cod_ubig' => '7',
            'provincia_id' => '19'
        ]);
        District::create([
            'name_distrito' => 'Santa Cruz',
            'cod_ubig' => '8',
            'provincia_id' => '19'
        ]);
        District::create([
            'name_distrito' => 'Santo Toribio',
            'cod_ubig' => '9',
            'provincia_id' => '19'
        ]);
        District::create([
            'name_distrito' => 'Yuracmarca',
            'cod_ubig' => '10',
            'provincia_id' => '19'
        ]);


        District::create([
            'name_distrito' => 'Piscobamba',
            'cod_ubig' => '1',
            'provincia_id' => '20'
        ]);
        District::create([
            'name_distrito' => 'Casca',
            'cod_ubig' => '2',
            'provincia_id' => '20'
        ]);
        District::create([
            'name_distrito' => 'Eleazar Guzmán Barron',
            'cod_ubig' => '3',
            'provincia_id' => '20'
        ]);
        District::create([
            'name_distrito' => 'Fidel Olivas Escudero',
            'cod_ubig' => '4',
            'provincia_id' => '20'
        ]);
        District::create([
            'name_distrito' => 'Llama',
            'cod_ubig' => '5',
            'provincia_id' => '20'
        ]);
        District::create([
            'name_distrito' => 'Llumpa',
            'cod_ubig' => '6',
            'provincia_id' => '20'
        ]);
        District::create([
            'name_distrito' => 'Lucma',
            'cod_ubig' => '7',
            'provincia_id' => '20'
        ]);
        District::create([
            'name_distrito' => 'Musga',
            'cod_ubig' => '8',
            'provincia_id' => '20'
        ]);


        District::create([
            'name_distrito' => 'Ocros',
            'cod_ubig' => '1',
            'provincia_id' => '21'
        ]);
        District::create([
            'name_distrito' => 'Acas',
            'cod_ubig' => '2',
            'provincia_id' => '21'
        ]);
        District::create([
            'name_distrito' => 'Cajamarquilla',
            'cod_ubig' => '3',
            'provincia_id' => '21'
        ]);
        District::create([
            'name_distrito' => 'Carhuapampa',
            'cod_ubig' => '4',
            'provincia_id' => '21'
        ]);
        District::create([
            'name_distrito' => 'Cochas',
            'cod_ubig' => '5',
            'provincia_id' => '21'
        ]);
        District::create([
            'name_distrito' => 'Congas',
            'cod_ubig' => '6',
            'provincia_id' => '21'
        ]);
        District::create([
            'name_distrito' => 'Llipa',
            'cod_ubig' => '7',
            'provincia_id' => '21'
        ]);
        District::create([
            'name_distrito' => 'San Cristóbal de Rajan',
            'cod_ubig' => '8',
            'provincia_id' => '21'
        ]);
        District::create([
            'name_distrito' => 'San Pedro',
            'cod_ubig' => '9',
            'provincia_id' => '21'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Chilcas',
            'cod_ubig' => '10',
            'provincia_id' => '21'
        ]);


        District::create([
            'name_distrito' => 'Cabana',
            'cod_ubig' => '1',
            'provincia_id' => '22'
        ]);
        District::create([
            'name_distrito' => 'Bolognesi',
            'cod_ubig' => '2',
            'provincia_id' => '22'
        ]);
        District::create([
            'name_distrito' => 'Conchucos',
            'cod_ubig' => '3',
            'provincia_id' => '22'
        ]);
        District::create([
            'name_distrito' => 'Huacaschuque',
            'cod_ubig' => '4',
            'provincia_id' => '22'
        ]);
        District::create([
            'name_distrito' => 'Huandoval',
            'cod_ubig' => '5',
            'provincia_id' => '22'
        ]);
        District::create([
            'name_distrito' => 'Lacabamba',
            'cod_ubig' => '6',
            'provincia_id' => '22'
        ]);
        District::create([
            'name_distrito' => 'Llapo',
            'cod_ubig' => '7',
            'provincia_id' => '22'
        ]);
        District::create([
            'name_distrito' => 'Pallasca',
            'cod_ubig' => '8',
            'provincia_id' => '22'
        ]);
        District::create([
            'name_distrito' => 'Pampas',
            'cod_ubig' => '9',
            'provincia_id' => '22'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa',
            'cod_ubig' => '10',
            'provincia_id' => '22'
        ]);
        District::create([
            'name_distrito' => 'Tauca',
            'cod_ubig' => '11',
            'provincia_id' => '22'
        ]);


        District::create([
            'name_distrito' => 'Pomabamba',
            'cod_ubig' => '1',
            'provincia_id' => '23'
        ]);
        District::create([
            'name_distrito' => 'Huayllan',
            'cod_ubig' => '2',
            'provincia_id' => '23'
        ]);
        District::create([
            'name_distrito' => 'Parobamba',
            'cod_ubig' => '3',
            'provincia_id' => '23'
        ]);
        District::create([
            'name_distrito' => 'Quinuabamba',
            'cod_ubig' => '4',
            'provincia_id' => '23'
        ]);


        District::create([
            'name_distrito' => 'Recuay',
            'cod_ubig' => '1',
            'provincia_id' => '24'
        ]);
        District::create([
            'name_distrito' => 'Catac',
            'cod_ubig' => '2',
            'provincia_id' => '24'
        ]);
        District::create([
            'name_distrito' => 'Cotaparaco',
            'cod_ubig' => '3',
            'provincia_id' => '24'
        ]);
        District::create([
            'name_distrito' => 'Huayllapampa',
            'cod_ubig' => '4',
            'provincia_id' => '24'
        ]);
        District::create([
            'name_distrito' => 'Llacllin',
            'cod_ubig' => '5',
            'provincia_id' => '24'
        ]);
        District::create([
            'name_distrito' => 'Marca',
            'cod_ubig' => '6',
            'provincia_id' => '24'
        ]);
        District::create([
            'name_distrito' => 'Pampas Chico',
            'cod_ubig' => '7',
            'provincia_id' => '24'
        ]);
        District::create([
            'name_distrito' => 'Pararin',
            'cod_ubig' => '8',
            'provincia_id' => '24'
        ]);
        District::create([
            'name_distrito' => 'Tapacocha',
            'cod_ubig' => '9',
            'provincia_id' => '24'
        ]);
        District::create([
            'name_distrito' => 'Ticapampa',
            'cod_ubig' => '10',
            'provincia_id' => '24'
        ]);


        District::create([
            'name_distrito' => 'Chimbote',
            'cod_ubig' => '1',
            'provincia_id' => '25'
        ]);
        District::create([
            'name_distrito' => 'Cáceres del Perú',
            'cod_ubig' => '2',
            'provincia_id' => '25'
        ]);
        District::create([
            'name_distrito' => 'Coishco',
            'cod_ubig' => '3',
            'provincia_id' => '25'
        ]);
        District::create([
            'name_distrito' => 'Macate',
            'cod_ubig' => '4',
            'provincia_id' => '25'
        ]);
        District::create([
            'name_distrito' => 'Moro',
            'cod_ubig' => '5',
            'provincia_id' => '25'
        ]);
        District::create([
            'name_distrito' => 'Nepeña',
            'cod_ubig' => '6',
            'provincia_id' => '25'
        ]);
        District::create([
            'name_distrito' => 'Samanco',
            'cod_ubig' => '7',
            'provincia_id' => '25'
        ]);
        District::create([
            'name_distrito' => 'Santa',
            'cod_ubig' => '8',
            'provincia_id' => '25'
        ]);
        District::create([
            'name_distrito' => 'Nuevo Chimbote',
            'cod_ubig' => '9',
            'provincia_id' => '25'
        ]);


        District::create([
            'name_distrito' => 'Sihuas',
            'cod_ubig' => '1',
            'provincia_id' => '26'
        ]);
        District::create([
            'name_distrito' => 'Acobamba',
            'cod_ubig' => '2',
            'provincia_id' => '26'
        ]);
        District::create([
            'name_distrito' => 'Alfonso Ugarte',
            'cod_ubig' => '3',
            'provincia_id' => '26'
        ]);
        District::create([
            'name_distrito' => 'Cashapampa',
            'cod_ubig' => '4',
            'provincia_id' => '26'
        ]);
        District::create([
            'name_distrito' => 'Chingalpo',
            'cod_ubig' => '5',
            'provincia_id' => '26'
        ]);
        District::create([
            'name_distrito' => 'Huayllabamba',
            'cod_ubig' => '6',
            'provincia_id' => '26'
        ]);
        District::create([
            'name_distrito' => 'Quiches',
            'cod_ubig' => '7',
            'provincia_id' => '26'
        ]);
        District::create([
            'name_distrito' => 'Ragash',
            'cod_ubig' => '8',
            'provincia_id' => '26'
        ]);
        District::create([
            'name_distrito' => 'San Juan',
            'cod_ubig' => '9',
            'provincia_id' => '26'
        ]);
        District::create([
            'name_distrito' => 'Sicsibamba',
            'cod_ubig' => '10',
            'provincia_id' => '26'
        ]);


        District::create([
            'name_distrito' => 'Yungay',
            'cod_ubig' => '1',
            'provincia_id' => '27'
        ]);
        District::create([
            'name_distrito' => 'Cascapara',
            'cod_ubig' => '2',
            'provincia_id' => '27'
        ]);
        District::create([
            'name_distrito' => 'Mancos',
            'cod_ubig' => '3',
            'provincia_id' => '27'
        ]);
        District::create([
            'name_distrito' => 'Matacoto',
            'cod_ubig' => '4',
            'provincia_id' => '27'
        ]);
        District::create([
            'name_distrito' => 'Quillo',
            'cod_ubig' => '5',
            'provincia_id' => '27'
        ]);
        District::create([
            'name_distrito' => 'Ranrahirca',
            'cod_ubig' => '6',
            'provincia_id' => '27'
        ]);
        District::create([
            'name_distrito' => 'Shupluy',
            'cod_ubig' => '7',
            'provincia_id' => '27'
        ]);
        District::create([
            'name_distrito' => 'Yanama',
            'cod_ubig' => '8',
            'provincia_id' => '27'
        ]);



        District::create([
            'name_distrito' => 'Abancay',
            'cod_ubig' => '1',
            'provincia_id' => '28'
        ]);
        District::create([
            'name_distrito' => 'Chacoche',
            'cod_ubig' => '2',
            'provincia_id' => '28'
        ]);
        District::create([
            'name_distrito' => 'Circa',
            'cod_ubig' => '3',
            'provincia_id' => '28'
        ]);
        District::create([
            'name_distrito' => 'Curahuasi',
            'cod_ubig' => '4',
            'provincia_id' => '28'
        ]);
        District::create([
            'name_distrito' => 'Huanipaca',
            'cod_ubig' => '5',
            'provincia_id' => '28'
        ]);
        District::create([
            'name_distrito' => 'Lambrama',
            'cod_ubig' => '6',
            'provincia_id' => '28'
        ]);
        District::create([
            'name_distrito' => 'Pichirhua',
            'cod_ubig' => '7',
            'provincia_id' => '28'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Cachora',
            'cod_ubig' => '8',
            'provincia_id' => '28'
        ]);
        District::create([
            'name_distrito' => 'Tamburco',
            'cod_ubig' => '9',
            'provincia_id' => '28'
        ]);


        District::create([
            'name_distrito' => 'Andahuaylas',
            'cod_ubig' => '1',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Andarapa',
            'cod_ubig' => '2',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Chiara',
            'cod_ubig' => '3',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Huancarama',
            'cod_ubig' => '4',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Huancaray',
            'cod_ubig' => '5',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Huayana',
            'cod_ubig' => '6',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Kishuara',
            'cod_ubig' => '7',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Pacobamba',
            'cod_ubig' => '8',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Pacucha',
            'cod_ubig' => '9',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Pampachiri',
            'cod_ubig' => '10',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Pomacocha',
            'cod_ubig' => '11',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'San Antonio de Cachi',
            'cod_ubig' => '12',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'San Jerónimo',
            'cod_ubig' => '13',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'San Miguel de Chaccrampa',
            'cod_ubig' => '14',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Santa María de Chicmo',
            'cod_ubig' => '15',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Talavera',
            'cod_ubig' => '16',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Tumay Huaraca',
            'cod_ubig' => '17',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Turpo',
            'cod_ubig' => '18',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'Kaquiabamba',
            'cod_ubig' => '19',
            'provincia_id' => '29'
        ]);
        District::create([
            'name_distrito' => 'José María Arguedas',
            'cod_ubig' => '20',
            'provincia_id' => '29'
        ]);



        District::create([
            'name_distrito' => 'Antabamba',
            'cod_ubig' => '1',
            'provincia_id' => '30'
        ]);
        District::create([
            'name_distrito' => 'El Oro',
            'cod_ubig' => '2',
            'provincia_id' => '30'
        ]);
        District::create([
            'name_distrito' => 'Huaquirca',
            'cod_ubig' => '3',
            'provincia_id' => '30'
        ]);
        District::create([
            'name_distrito' => 'Juan Espinoza Medrano',
            'cod_ubig' => '4',
            'provincia_id' => '30'
        ]);
        District::create([
            'name_distrito' => 'Oropesa',
            'cod_ubig' => '5',
            'provincia_id' => '30'
        ]);
        District::create([
            'name_distrito' => 'Pachaconas',
            'cod_ubig' => '6',
            'provincia_id' => '30'
        ]);
        District::create([
            'name_distrito' => 'Sabaino',
            'cod_ubig' => '7',
            'provincia_id' => '30'
        ]);


        District::create([
            'name_distrito' => 'Chalhuanca',
            'cod_ubig' => '1',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Capaya',
            'cod_ubig' => '2',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Caraybamba',
            'cod_ubig' => '3',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Chapimarca',
            'cod_ubig' => '4',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Colcabamba',
            'cod_ubig' => '5',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Cotaruse',
            'cod_ubig' => '6',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Ihuayllo',
            'cod_ubig' => '7',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Justo Apu Sahuaraura',
            'cod_ubig' => '8',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Lucre',
            'cod_ubig' => '9',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Pocohuanca',
            'cod_ubig' => '10',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Chacña',
            'cod_ubig' => '11',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Sañayca',
            'cod_ubig' => '12',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Soraya',
            'cod_ubig' => '13',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Tapairihua',
            'cod_ubig' => '14',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Tintay',
            'cod_ubig' => '15',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Toraya',
            'cod_ubig' => '16',
            'provincia_id' => '31'
        ]);
        District::create([
            'name_distrito' => 'Yanaca',
            'cod_ubig' => '17',
            'provincia_id' => '31'
        ]);
        

        District::create([
            'name_distrito' => 'Tambobamba',
            'cod_ubig' => '1',
            'provincia_id' => '32'
        ]);
        District::create([
            'name_distrito' => 'Cotabambas',
            'cod_ubig' => '2',
            'provincia_id' => '32'
        ]);
        District::create([
            'name_distrito' => 'Coyllurqui',
            'cod_ubig' => '3',
            'provincia_id' => '32'
        ]);
        District::create([
            'name_distrito' => 'Haquira',
            'cod_ubig' => '4',
            'provincia_id' => '32'
        ]);
        District::create([
            'name_distrito' => 'Mara',
            'cod_ubig' => '5',
            'provincia_id' => '32'
        ]);
        District::create([
            'name_distrito' => 'Challhuahuacho',
            'cod_ubig' => '6',
            'provincia_id' => '32'
        ]);


        District::create([
            'name_distrito' => 'Chincheros',
            'cod_ubig' => '1',
            'provincia_id' => '33'
        ]);
        District::create([
            'name_distrito' => 'Anco_Huallo',
            'cod_ubig' => '2',
            'provincia_id' => '33'
        ]);
        District::create([
            'name_distrito' => 'Cocharcas',
            'cod_ubig' => '3',
            'provincia_id' => '33'
        ]);
        District::create([
            'name_distrito' => 'Huaccana',
            'cod_ubig' => '4',
            'provincia_id' => '33'
        ]);
        District::create([
            'name_distrito' => 'Ocobamba',
            'cod_ubig' => '5',
            'provincia_id' => '33'
        ]);
        District::create([
            'name_distrito' => 'Ongoy',
            'cod_ubig' => '6',
            'provincia_id' => '33'
        ]);
        District::create([
            'name_distrito' => 'Uranmarca',
            'cod_ubig' => '7',
            'provincia_id' => '33'
        ]);
        District::create([
            'name_distrito' => 'Ranracancha',
            'cod_ubig' => '8',
            'provincia_id' => '33'
        ]);
        District::create([
            'name_distrito' => 'Rocchacc',
            'cod_ubig' => '9',
            'provincia_id' => '33'
        ]);
        District::create([
            'name_distrito' => 'El Porvenir',
            'cod_ubig' => '10',
            'provincia_id' => '33'
        ]);
        District::create([
            'name_distrito' => 'Los Chankas',
            'cod_ubig' => '11',
            'provincia_id' => '33'
        ]);


        District::create([
            'name_distrito' => 'Chuquibambilla',
            'cod_ubig' => '1',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Curpahuasi',
            'cod_ubig' => '2',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Gamarra',
            'cod_ubig' => '3',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Huayllati',
            'cod_ubig' => '4',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Mamara',
            'cod_ubig' => '5',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Micaela Bastidas',
            'cod_ubig' => '6',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Pataypampa',
            'cod_ubig' => '7',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Progreso',
            'cod_ubig' => '8',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'San Antonio',
            'cod_ubig' => '9',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa',
            'cod_ubig' => '10',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Turpay',
            'cod_ubig' => '11',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Vilcabamba',
            'cod_ubig' => '12',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Virundo',
            'cod_ubig' => '13',
            'provincia_id' => '34'
        ]);
        District::create([
            'name_distrito' => 'Curasco',
            'cod_ubig' => '14',
            'provincia_id' => '34'
        ]);


        District::create([
            'name_distrito' => 'Arequipa',
            'cod_ubig' => '1',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Alto Selva Alegre',
            'cod_ubig' => '2',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Cayma',
            'cod_ubig' => '3',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Cerro Colorado',
            'cod_ubig' => '4',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Characato',
            'cod_ubig' => '5',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Chiguata',
            'cod_ubig' => '6',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Jacobo Hunter',
            'cod_ubig' => '7',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'La Joya',
            'cod_ubig' => '8',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Mariano Melgar',
            'cod_ubig' => '9',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Miraflores',
            'cod_ubig' => '10',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Mollebaya',
            'cod_ubig' => '11',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Paucarpata',
            'cod_ubig' => '12',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Pocsi',
            'cod_ubig' => '13',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Polobaya',
            'cod_ubig' => '14',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Quequeña',
            'cod_ubig' => '15',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Sabandia',
            'cod_ubig' => '16',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Sachaca',
            'cod_ubig' => '17',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Siguas',
            'cod_ubig' => '18',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Tarucani',
            'cod_ubig' => '19',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Santa Isabel de Siguas',
            'cod_ubig' => '20',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Santa Rita de Siguas',
            'cod_ubig' => '21',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Socabaya',
            'cod_ubig' => '22',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Tiabaya',
            'cod_ubig' => '23',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Uchumayo',
            'cod_ubig' => '24',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Vitor',
            'cod_ubig' => '25',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Yanahuara',
            'cod_ubig' => '26',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Yarabamba',
            'cod_ubig' => '27',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'Yura',
            'cod_ubig' => '28',
            'provincia_id' => '35'
        ]);
        District::create([
            'name_distrito' => 'José Luis Bustamante Y Rivero',
            'cod_ubig' => '29',
            'provincia_id' => '35'
        ]);


        District::create([
            'name_distrito' => 'Camaná',
            'cod_ubig' => '1',
            'provincia_id' => '36'
        ]);
        District::create([
            'name_distrito' => 'José María Quimper',
            'cod_ubig' => '2',
            'provincia_id' => '36'
        ]);
        District::create([
            'name_distrito' => 'Mariano Nicolás Valcárcel',
            'cod_ubig' => '3',
            'provincia_id' => '36'
        ]);
        District::create([
            'name_distrito' => 'Mariscal Cáceres',
            'cod_ubig' => '4',
            'provincia_id' => '36'
        ]);
        District::create([
            'name_distrito' => 'Nicolás de Pierola',
            'cod_ubig' => '5',
            'provincia_id' => '36'
        ]);
        District::create([
            'name_distrito' => 'Ocoña',
            'cod_ubig' => '6',
            'provincia_id' => '36'
        ]);
        District::create([
            'name_distrito' => 'Quilca',
            'cod_ubig' => '7',
            'provincia_id' => '36'
        ]);
        District::create([
            'name_distrito' => 'Samuel Pastor',
            'cod_ubig' => '8',
            'provincia_id' => '36'
        ]);


        District::create([
            'name_distrito' => 'Caravelí',
            'cod_ubig' => '1',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Acarí',
            'cod_ubig' => '2',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Atico',
            'cod_ubig' => '3',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Atiquipa',
            'cod_ubig' => '4',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Bella Unión',
            'cod_ubig' => '5',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Cahuacho',
            'cod_ubig' => '6',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Chala',
            'cod_ubig' => '7',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Chaparra',
            'cod_ubig' => '8',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Huanuhuanu',
            'cod_ubig' => '9',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Jaqui',
            'cod_ubig' => '10',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Lomas',
            'cod_ubig' => '11',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Quicacha',
            'cod_ubig' => '12',
            'provincia_id' => '37'
        ]);
        District::create([
            'name_distrito' => 'Yauca',
            'cod_ubig' => '13',
            'provincia_id' => '37'
        ]);


        District::create([
            'name_distrito' => 'Aplao',
            'cod_ubig' => '1',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Andagua',
            'cod_ubig' => '2',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Ayo',
            'cod_ubig' => '3',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Chachas',
            'cod_ubig' => '4',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Chilcaymarca',
            'cod_ubig' => '5',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Choco',
            'cod_ubig' => '6',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Huancarqui',
            'cod_ubig' => '7',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Machaguay',
            'cod_ubig' => '8',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Orcopampa',
            'cod_ubig' => '9',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Pampacolca',
            'cod_ubig' => '10',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Tipan',
            'cod_ubig' => '11',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Uñon',
            'cod_ubig' => '12',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Uraca',
            'cod_ubig' => '13',
            'provincia_id' => '38'
        ]);
        District::create([
            'name_distrito' => 'Viraco',
            'cod_ubig' => '14',
            'provincia_id' => '38'
        ]);


        District::create([
            'name_distrito' => 'Chivay',
            'cod_ubig' => '1',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Achoma',
            'cod_ubig' => '2',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Cabanaconde',
            'cod_ubig' => '3',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Callalli',
            'cod_ubig' => '4',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Caylloma',
            'cod_ubig' => '5',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Coporaque',
            'cod_ubig' => '6',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Huambo',
            'cod_ubig' => '7',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Huanca',
            'cod_ubig' => '8',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Ichupampa',
            'cod_ubig' => '9',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Lari',
            'cod_ubig' => '10',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Lluta',
            'cod_ubig' => '11',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Maca',
            'cod_ubig' => '12',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Madrigal',
            'cod_ubig' => '13',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'San Antonio de Chuca',
            'cod_ubig' => '14',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Sibayo',
            'cod_ubig' => '15',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Tapay',
            'cod_ubig' => '16',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Tisco',
            'cod_ubig' => '17',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Tuti',
            'cod_ubig' => '18',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Yanque',
            'cod_ubig' => '19',
            'provincia_id' => '39'
        ]);
        District::create([
            'name_distrito' => 'Majes',
            'cod_ubig' => '20',
            'provincia_id' => '39'
        ]);


        District::create([
            'name_distrito' => 'Chuquibamba',
            'cod_ubig' => '1',
            'provincia_id' => '40'
        ]);
        District::create([
            'name_distrito' => 'Andaray',
            'cod_ubig' => '2',
            'provincia_id' => '40'
        ]);
        District::create([
            'name_distrito' => 'Cayarani',
            'cod_ubig' => '3',
            'provincia_id' => '40'
        ]);
        District::create([
            'name_distrito' => 'Chichas',
            'cod_ubig' => '4',
            'provincia_id' => '40'
        ]);
        District::create([
            'name_distrito' => 'Iray',
            'cod_ubig' => '5',
            'provincia_id' => '40'
        ]);
        District::create([
            'name_distrito' => 'Río Grande',
            'cod_ubig' => '6',
            'provincia_id' => '40'
        ]);
        District::create([
            'name_distrito' => 'Salamanca',
            'cod_ubig' => '7',
            'provincia_id' => '40'
        ]);
        District::create([
            'name_distrito' => 'Yanaquihua',
            'cod_ubig' => '8',
            'provincia_id' => '40'
        ]);


        District::create([
            'name_distrito' => 'Mollendo',
            'cod_ubig' => '1',
            'provincia_id' => '41'
        ]);
        District::create([
            'name_distrito' => 'Cocachacra',
            'cod_ubig' => '2',
            'provincia_id' => '41'
        ]);
        District::create([
            'name_distrito' => 'Dean Valdivia',
            'cod_ubig' => '3',
            'provincia_id' => '41'
        ]);
        District::create([
            'name_distrito' => 'Islay',
            'cod_ubig' => '4',
            'provincia_id' => '41'
        ]);
        District::create([
            'name_distrito' => 'Mejia',
            'cod_ubig' => '5',
            'provincia_id' => '41'
        ]);
        District::create([
            'name_distrito' => 'Punta de Bombón',
            'cod_ubig' => '6',
            'provincia_id' => '41'
        ]);


        District::create([
            'name_distrito' => 'Cotahuasi',
            'cod_ubig' => '1',
            'provincia_id' => '42'
        ]);
        District::create([
            'name_distrito' => 'Alca',
            'cod_ubig' => '2',
            'provincia_id' => '42'
        ]);
        District::create([
            'name_distrito' => 'Charcana',
            'cod_ubig' => '3',
            'provincia_id' => '42'
        ]);
        District::create([
            'name_distrito' => 'Huaynacotas',
            'cod_ubig' => '4',
            'provincia_id' => '42'
        ]);
        District::create([
            'name_distrito' => 'Pampamarca',
            'cod_ubig' => '5',
            'provincia_id' => '42'
        ]);
        District::create([
            'name_distrito' => 'Puyca',
            'cod_ubig' => '6',
            'provincia_id' => '42'
        ]);
        District::create([
            'name_distrito' => 'Quechualla',
            'cod_ubig' => '7',
            'provincia_id' => '42'
        ]);
        District::create([
            'name_distrito' => 'Sayla',
            'cod_ubig' => '8',
            'provincia_id' => '42'
        ]);
        District::create([
            'name_distrito' => 'Tauria',
            'cod_ubig' => '9',
            'provincia_id' => '42'
        ]);
        District::create([
            'name_distrito' => 'Tomepampa',
            'cod_ubig' => '10',
            'provincia_id' => '42'
        ]);
        District::create([
            'name_distrito' => 'Toro',
            'cod_ubig' => '11',
            'provincia_id' => '42'
        ]);


        District::create([
            'name_distrito' => 'Ayacucho',
            'cod_ubig' => '1',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Acocro',
            'cod_ubig' => '2',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Acos Vinchos',
            'cod_ubig' => '3',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Carmen Alto',
            'cod_ubig' => '4',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Chiara',
            'cod_ubig' => '5',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Ocros',
            'cod_ubig' => '6',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Pacaycasa',
            'cod_ubig' => '7',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Quinua',
            'cod_ubig' => '8',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'San José de Ticllas',
            'cod_ubig' => '9',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'San Juan Bautista',
            'cod_ubig' => '10',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Pischa',
            'cod_ubig' => '11',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Socos',
            'cod_ubig' => '12',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Tambillo',
            'cod_ubig' => '13',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Vinchos',
            'cod_ubig' => '14',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Jesús Nazareno',
            'cod_ubig' => '15',
            'provincia_id' => '43'
        ]);
        District::create([
            'name_distrito' => 'Andrés Avelino Cáceres Dorregaray',
            'cod_ubig' => '16',
            'provincia_id' => '43'
        ]);
        

        District::create([
            'name_distrito' => 'Cangallo',
            'cod_ubig' => '1',
            'provincia_id' => '44'
        ]);
        District::create([
            'name_distrito' => 'Chuschi',
            'cod_ubig' => '2',
            'provincia_id' => '44'
        ]);
        District::create([
            'name_distrito' => 'Los Morochucos',
            'cod_ubig' => '3',
            'provincia_id' => '44'
        ]);
        District::create([
            'name_distrito' => 'María Parado de Bellido',
            'cod_ubig' => '4',
            'provincia_id' => '44'
        ]);
        District::create([
            'name_distrito' => 'Paras',
            'cod_ubig' => '5',
            'provincia_id' => '44'
        ]);
        District::create([
            'name_distrito' => 'Totos',
            'cod_ubig' => '6',
            'provincia_id' => '44'
        ]);

        District::create([
            'name_distrito' => 'Sancos',
            'cod_ubig' => '1',
            'provincia_id' => '45'
        ]);
        District::create([
            'name_distrito' => 'Carapo',
            'cod_ubig' => '2',
            'provincia_id' => '45'
        ]);
        District::create([
            'name_distrito' => 'Sacsamarca',
            'cod_ubig' => '3',
            'provincia_id' => '45'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Lucanamarca',
            'cod_ubig' => '4',
            'provincia_id' => '45'
        ]);


        District::create([
            'name_distrito' => 'Huanta',
            'cod_ubig' => '1',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Ayahuanco',
            'cod_ubig' => '2',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Huamanguilla',
            'cod_ubig' => '3',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Iguain',
            'cod_ubig' => '4',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Luricocha',
            'cod_ubig' => '5',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Santillana',
            'cod_ubig' => '6',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Sivia',
            'cod_ubig' => '7',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Llochegua',
            'cod_ubig' => '8',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Canayre',
            'cod_ubig' => '9',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Uchuraccay',
            'cod_ubig' => '10',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Pucacolpa',
            'cod_ubig' => '11',
            'provincia_id' => '46'
        ]);
        District::create([
            'name_distrito' => 'Chaca',
            'cod_ubig' => '12',
            'provincia_id' => '46'
        ]);


        District::create([
            'name_distrito' => 'San Miguel',
            'cod_ubig' => '1',
            'provincia_id' => '47'
        ]);
        District::create([
            'name_distrito' => 'Anco',
            'cod_ubig' => '2',
            'provincia_id' => '47'
        ]);
        District::create([
            'name_distrito' => 'Ayna',
            'cod_ubig' => '3',
            'provincia_id' => '47'
        ]);
        District::create([
            'name_distrito' => 'Chilcas',
            'cod_ubig' => '4',
            'provincia_id' => '47'
        ]);
        District::create([
            'name_distrito' => 'Chungui',
            'cod_ubig' => '5',
            'provincia_id' => '47'
        ]);
        District::create([
            'name_distrito' => 'Luis Carranza',
            'cod_ubig' => '6',
            'provincia_id' => '47'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa',
            'cod_ubig' => '7',
            'provincia_id' => '47'
        ]);
        District::create([
            'name_distrito' => 'Tambo',
            'cod_ubig' => '8',
            'provincia_id' => '47'
        ]);
        District::create([
            'name_distrito' => 'Samugari',
            'cod_ubig' => '9',
            'provincia_id' => '47'
        ]);
        District::create([
            'name_distrito' => 'Anchihuay',
            'cod_ubig' => '10',
            'provincia_id' => '47'
        ]);
        District::create([
            'name_distrito' => 'Oronccoy',
            'cod_ubig' => '11',
            'provincia_id' => '47'
        ]);


        District::create([
            'name_distrito' => 'Puquio',
            'cod_ubig' => '1',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Aucara',
            'cod_ubig' => '2',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Cabana',
            'cod_ubig' => '3',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Carmen Salcedo',
            'cod_ubig' => '4',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Chaviña',
            'cod_ubig' => '5',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Chipao',
            'cod_ubig' => '6',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Huac-Huas',
            'cod_ubig' => '7',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Laramate',
            'cod_ubig' => '8',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Leoncio Prado',
            'cod_ubig' => '9',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Llauta',
            'cod_ubig' => '10',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Lucanas',
            'cod_ubig' => '11',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Ocaña',
            'cod_ubig' => '12',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Otoca',
            'cod_ubig' => '13',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Saisa',
            'cod_ubig' => '14',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'San Cristóbal',
            'cod_ubig' => '15',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'San Juan',
            'cod_ubig' => '16',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'San Pedro',
            'cod_ubig' => '17',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Palco',
            'cod_ubig' => '18',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Sancos',
            'cod_ubig' => '19',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Santa Ana de Huaycahuacho',
            'cod_ubig' => '20',
            'provincia_id' => '48'
        ]);
        District::create([
            'name_distrito' => 'Santa Lucia',
            'cod_ubig' => '21',
            'provincia_id' => '48'
        ]);


        District::create([
            'name_distrito' => 'Coracora',
            'cod_ubig' => '1',
            'provincia_id' => '49'
        ]);
        District::create([
            'name_distrito' => 'Chumpi',
            'cod_ubig' => '2',
            'provincia_id' => '49'
        ]);
        District::create([
            'name_distrito' => 'Coronel Castañeda',
            'cod_ubig' => '3',
            'provincia_id' => '49'
        ]);
        District::create([
            'name_distrito' => 'Pacapausa',
            'cod_ubig' => '4',
            'provincia_id' => '49'
        ]);
        District::create([
            'name_distrito' => 'Pullo',
            'cod_ubig' => '5',
            'provincia_id' => '49'
        ]);
        District::create([
            'name_distrito' => 'Puyusca',
            'cod_ubig' => '6',
            'provincia_id' => '49'
        ]);
        District::create([
            'name_distrito' => 'San Francisco de Ravacayco',
            'cod_ubig' => '7',
            'provincia_id' => '49'
        ]);
        District::create([
            'name_distrito' => 'Upahuacho',
            'cod_ubig' => '8',
            'provincia_id' => '49'
        ]);


        District::create([
            'name_distrito' => 'Pausa',
            'cod_ubig' => '1',
            'provincia_id' => '50'
        ]);
        District::create([
            'name_distrito' => 'Colta',
            'cod_ubig' => '2',
            'provincia_id' => '50'
        ]);
        District::create([
            'name_distrito' => 'Corculla',
            'cod_ubig' => '3',
            'provincia_id' => '50'
        ]);
        District::create([
            'name_distrito' => 'Lampa',
            'cod_ubig' => '4',
            'provincia_id' => '50'
        ]);
        District::create([
            'name_distrito' => 'Marcabamba',
            'cod_ubig' => '5',
            'provincia_id' => '50'
        ]);
        District::create([
            'name_distrito' => 'Oyolo',
            'cod_ubig' => '6',
            'provincia_id' => '50'
        ]);
        District::create([
            'name_distrito' => 'Pararca',
            'cod_ubig' => '7',
            'provincia_id' => '50'
        ]);
        District::create([
            'name_distrito' => 'San Javier de Alpabamba',
            'cod_ubig' => '8',
            'provincia_id' => '50'
        ]);
        District::create([
            'name_distrito' => 'San José de Ushua',
            'cod_ubig' => '9',
            'provincia_id' => '50'
        ]);
        District::create([
            'name_distrito' => 'Sara Sara',
            'cod_ubig' => '10',
            'provincia_id' => '50'
        ]);


        District::create([
            'name_distrito' => 'Querobamba',
            'cod_ubig' => '1',
            'provincia_id' => '51'
        ]);
        District::create([
            'name_distrito' => 'Belén',
            'cod_ubig' => '2',
            'provincia_id' => '51'
        ]);
        District::create([
            'name_distrito' => 'Chalcos',
            'cod_ubig' => '3',
            'provincia_id' => '51'
        ]);
        District::create([
            'name_distrito' => 'Chilcayoc',
            'cod_ubig' => '4',
            'provincia_id' => '51'
        ]);
        District::create([
            'name_distrito' => 'Huacaña',
            'cod_ubig' => '5',
            'provincia_id' => '51'
        ]);
        District::create([
            'name_distrito' => 'Morcolla',
            'cod_ubig' => '6',
            'provincia_id' => '51'
        ]);
        District::create([
            'name_distrito' => 'Paico',
            'cod_ubig' => '7',
            'provincia_id' => '51'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Larcay',
            'cod_ubig' => '8',
            'provincia_id' => '51'
        ]);
        District::create([
            'name_distrito' => 'San Salvador de Quije',
            'cod_ubig' => '9',
            'provincia_id' => '51'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Paucaray',
            'cod_ubig' => '10',
            'provincia_id' => '51'
        ]);
        District::create([
            'name_distrito' => 'Soras',
            'cod_ubig' => '11',
            'provincia_id' => '51'
        ]);


        District::create([
            'name_distrito' => 'Huancapi',
            'cod_ubig' => '1',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Alcamenca',
            'cod_ubig' => '2',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Apongo',
            'cod_ubig' => '3',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Asquipata',
            'cod_ubig' => '4',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Canaria',
            'cod_ubig' => '5',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Cayara',
            'cod_ubig' => '6',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Colca',
            'cod_ubig' => '7',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Huamanquiquia',
            'cod_ubig' => '8',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Huancaraylla',
            'cod_ubig' => '9',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Hualla',
            'cod_ubig' => '10',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Sarhua',
            'cod_ubig' => '11',
            'provincia_id' => '52'
        ]);
        District::create([
            'name_distrito' => 'Vilcanchos',
            'cod_ubig' => '12',
            'provincia_id' => '52'
        ]);


        District::create([
            'name_distrito' => 'Vilcas Huaman',
            'cod_ubig' => '1',
            'provincia_id' => '53'
        ]);
        District::create([
            'name_distrito' => 'Accomarca',
            'cod_ubig' => '2',
            'provincia_id' => '53'
        ]);
        District::create([
            'name_distrito' => 'Carhuanca',
            'cod_ubig' => '3',
            'provincia_id' => '53'
        ]);
        District::create([
            'name_distrito' => 'Concepción',
            'cod_ubig' => '4',
            'provincia_id' => '53'
        ]);
        District::create([
            'name_distrito' => 'Huambalpa',
            'cod_ubig' => '5',
            'provincia_id' => '53'
        ]);
        District::create([
            'name_distrito' => 'Independencia',
            'cod_ubig' => '6',
            'provincia_id' => '53'
        ]);
        District::create([
            'name_distrito' => 'Saurama',
            'cod_ubig' => '7',
            'provincia_id' => '53'
        ]);
        District::create([
            'name_distrito' => 'Vischongo',
            'cod_ubig' => '8',
            'provincia_id' => '53'
        ]);


        District::create([
            'name_distrito' => 'Cajamarca',
            'cod_ubig' => '1',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'Asunción',
            'cod_ubig' => '2',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'Chetilla',
            'cod_ubig' => '3',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'Cospan',
            'cod_ubig' => '4',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'Encañada',
            'cod_ubig' => '5',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'Jesús',
            'cod_ubig' => '6',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'Llacanora',
            'cod_ubig' => '7',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'Los Baños del Inca',
            'cod_ubig' => '8',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'Magdalena',
            'cod_ubig' => '9',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'Matara',
            'cod_ubig' => '10',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'Namora',
            'cod_ubig' => '11',
            'provincia_id' => '54'
        ]);
        District::create([
            'name_distrito' => 'San Juan',
            'cod_ubig' => '12',
            'provincia_id' => '54'
        ]);


        District::create([
            'name_distrito' => 'Cajabamba',
            'cod_ubig' => '1',
            'provincia_id' => '55'
        ]);
        District::create([
            'name_distrito' => 'Cachachi',
            'cod_ubig' => '2',
            'provincia_id' => '55'
        ]);
        District::create([
            'name_distrito' => 'Condebamba',
            'cod_ubig' => '3',
            'provincia_id' => '55'
        ]);
        District::create([
            'name_distrito' => 'Sitacocha',
            'cod_ubig' => '4',
            'provincia_id' => '55'
        ]);



        District::create([
            'name_distrito' => 'Celendín',
            'cod_ubig' => '1',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'Chumuch',
            'cod_ubig' => '2',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'Cortegana',
            'cod_ubig' => '3',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'Huasmin',
            'cod_ubig' => '4',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'Jorge Chávez',
            'cod_ubig' => '5',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'José Gálvez',
            'cod_ubig' => '6',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'Miguel Iglesias',
            'cod_ubig' => '7',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'Oxamarca',
            'cod_ubig' => '8',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'Sorochuco',
            'cod_ubig' => '9',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'Sucre',
            'cod_ubig' => '10',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'Utco',
            'cod_ubig' => '11',
            'provincia_id' => '56'
        ]);
        District::create([
            'name_distrito' => 'La Libertad de Pallan',
            'cod_ubig' => '12',
            'provincia_id' => '56'
        ]);


        District::create([
            'name_distrito' => 'Chota',
            'cod_ubig' => '1',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Anguia',
            'cod_ubig' => '2',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Chadin',
            'cod_ubig' => '3',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Chiguirip',
            'cod_ubig' => '4',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Chimban',
            'cod_ubig' => '5',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Choropampa',
            'cod_ubig' => '6',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Cochabamba',
            'cod_ubig' => '7',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Conchan',
            'cod_ubig' => '8',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Huambos',
            'cod_ubig' => '9',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Lajas',
            'cod_ubig' => '10',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Llama',
            'cod_ubig' => '11',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Miracosta',
            'cod_ubig' => '12',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Paccha',
            'cod_ubig' => '13',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Pion',
            'cod_ubig' => '14',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Querocoto',
            'cod_ubig' => '15',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Licupis',
            'cod_ubig' => '16',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Tacabamba',
            'cod_ubig' => '17',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Tocmoche',
            'cod_ubig' => '18',
            'provincia_id' => '57'
        ]);
        District::create([
            'name_distrito' => 'Chalamarca',
            'cod_ubig' => '19',
            'provincia_id' => '57'
        ]);


        District::create([
            'name_distrito' => 'Contumaza',
            'cod_ubig' => '1',
            'provincia_id' => '58'
        ]);
        District::create([
            'name_distrito' => 'Chilete',
            'cod_ubig' => '2',
            'provincia_id' => '58'
        ]);
        District::create([
            'name_distrito' => 'Cupisnique',
            'cod_ubig' => '3',
            'provincia_id' => '58'
        ]);
        District::create([
            'name_distrito' => 'Guzmango',
            'cod_ubig' => '4',
            'provincia_id' => '58'
        ]);
        District::create([
            'name_distrito' => 'San Benito',
            'cod_ubig' => '5',
            'provincia_id' => '58'
        ]);
        District::create([
            'name_distrito' => 'Santa Cruz de Toledo',
            'cod_ubig' => '6',
            'provincia_id' => '58'
        ]);
        District::create([
            'name_distrito' => 'Tantarica',
            'cod_ubig' => '7',
            'provincia_id' => '58'
        ]);
        District::create([
            'name_distrito' => 'Yonan',
            'cod_ubig' => '8',
            'provincia_id' => '58'
        ]);


        District::create([
            'name_distrito' => 'Cutervo',
            'cod_ubig' => '1',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'Callayuc',
            'cod_ubig' => '2',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'Choros',
            'cod_ubig' => '3',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'Cujillo',
            'cod_ubig' => '4',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'La Ramada',
            'cod_ubig' => '5',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'Querocotillo',
            'cod_ubig' => '6',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'Chachapoyas',
            'cod_ubig' => '7',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'San Andrés de Cutervo',
            'cod_ubig' => '8',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Cutervo',
            'cod_ubig' => '9',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'San Luis de Lucma',
            'cod_ubig' => '10',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'Santa Cruz',
            'cod_ubig' => '11',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'Santo Domingo de la Capilla',
            'cod_ubig' => '12',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'Santo Tomas',
            'cod_ubig' => '13',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'Socota',
            'cod_ubig' => '14',
            'provincia_id' => '59'
        ]);
        District::create([
            'name_distrito' => 'Toribio Casanova',
            'cod_ubig' => '15',
            'provincia_id' => '59'
        ]);


        District::create([
            'name_distrito' => 'Bambamarca',
            'cod_ubig' => '1',
            'provincia_id' => '60'
        ]);
        District::create([
            'name_distrito' => 'Chugur',
            'cod_ubig' => '2',
            'provincia_id' => '60'
        ]);
        District::create([
            'name_distrito' => 'Hualgayoc',
            'cod_ubig' => '3',
            'provincia_id' => '60'
        ]);


        District::create([
            'name_distrito' => 'Jaén',
            'cod_ubig' => '1',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'Bellavista',
            'cod_ubig' => '2',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'Chontali',
            'cod_ubig' => '3',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'Colasay',
            'cod_ubig' => '4',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'Huabal',
            'cod_ubig' => '5',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'Las Pirias',
            'cod_ubig' => '6',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'Pomahuaca',
            'cod_ubig' => '7',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'Pucara',
            'cod_ubig' => '8',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'Sallique',
            'cod_ubig' => '9',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'San Felipe',
            'cod_ubig' => '10',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'San José del Alto',
            'cod_ubig' => '11',
            'provincia_id' => '61'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa',
            'cod_ubig' => '12',
            'provincia_id' => '61'
        ]);


        District::create([
            'name_distrito' => 'San Ignacio',
            'cod_ubig' => '1',
            'provincia_id' => '62'
        ]);
        District::create([
            'name_distrito' => 'Chirinos',
            'cod_ubig' => '2',
            'provincia_id' => '62'
        ]);
        District::create([
            'name_distrito' => 'Huarango',
            'cod_ubig' => '3',
            'provincia_id' => '62'
        ]);
        District::create([
            'name_distrito' => 'La Coipa',
            'cod_ubig' => '4',
            'provincia_id' => '62'
        ]);
        District::create([
            'name_distrito' => 'Namballe',
            'cod_ubig' => '5',
            'provincia_id' => '62'
        ]);
        District::create([
            'name_distrito' => 'San José de Lourdes',
            'cod_ubig' => '6',
            'provincia_id' => '62'
        ]);
        District::create([
            'name_distrito' => 'Tabaconas',
            'cod_ubig' => '7',
            'provincia_id' => '62'
        ]);


        District::create([
            'name_distrito' => 'Pedro Gálvez',
            'cod_ubig' => '1',
            'provincia_id' => '63'
        ]);
        District::create([
            'name_distrito' => 'Chancay',
            'cod_ubig' => '2',
            'provincia_id' => '63'
        ]);
        District::create([
            'name_distrito' => 'Eduardo Villanueva',
            'cod_ubig' => '3',
            'provincia_id' => '63'
        ]);
        District::create([
            'name_distrito' => 'Gregorio Pita',
            'cod_ubig' => '4',
            'provincia_id' => '63'
        ]);
        District::create([
            'name_distrito' => 'Ichocan',
            'cod_ubig' => '5',
            'provincia_id' => '63'
        ]);
        District::create([
            'name_distrito' => 'José Manuel Quiroz',
            'cod_ubig' => '6',
            'provincia_id' => '63'
        ]);
        District::create([
            'name_distrito' => 'José Sabogal',
            'cod_ubig' => '7',
            'provincia_id' => '63'
        ]);



        District::create([
            'name_distrito' => 'San Miguel',
            'cod_ubig' => '1',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'Bolívar',
            'cod_ubig' => '2',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'Calquis',
            'cod_ubig' => '3',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'Catilluc',
            'cod_ubig' => '4',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'El Prado',
            'cod_ubig' => '5',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'La Florida',
            'cod_ubig' => '6',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'Llapa',
            'cod_ubig' => '7',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'Nanchoc',
            'cod_ubig' => '8',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'Niepos',
            'cod_ubig' => '9',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'San Gregorio',
            'cod_ubig' => '10',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'San Silvestre de Cochan',
            'cod_ubig' => '11',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'Tongod',
            'cod_ubig' => '12',
            'provincia_id' => '64'
        ]);
        District::create([
            'name_distrito' => 'Unión Agua Blanca',
            'cod_ubig' => '13',
            'provincia_id' => '64'
        ]);


        District::create([
            'name_distrito' => 'San Pablo',
            'cod_ubig' => '1',
            'provincia_id' => '65'
        ]);
        District::create([
            'name_distrito' => 'San Bernardino',
            'cod_ubig' => '2',
            'provincia_id' => '65'
        ]);
        District::create([
            'name_distrito' => 'San Luis',
            'cod_ubig' => '3',
            'provincia_id' => '65'
        ]);
        District::create([
            'name_distrito' => 'Tumbaden',
            'cod_ubig' => '4',
            'provincia_id' => '65'
        ]);


        District::create([
            'name_distrito' => 'Santa Cruz',
            'cod_ubig' => '1',
            'provincia_id' => '66'
        ]);
        District::create([
            'name_distrito' => 'Andabamba',
            'cod_ubig' => '2',
            'provincia_id' => '66'
        ]);
        District::create([
            'name_distrito' => 'Catache',
            'cod_ubig' => '3',
            'provincia_id' => '66'
        ]);
        District::create([
            'name_distrito' => 'Chancaybaños',
            'cod_ubig' => '4',
            'provincia_id' => '66'
        ]);
        District::create([
            'name_distrito' => 'La Esperanza',
            'cod_ubig' => '5',
            'provincia_id' => '66'
        ]);
        District::create([
            'name_distrito' => 'Ninabamba',
            'cod_ubig' => '6',
            'provincia_id' => '66'
        ]);
        District::create([
            'name_distrito' => 'Pulan',
            'cod_ubig' => '7',
            'provincia_id' => '66'
        ]);
        District::create([
            'name_distrito' => 'Saucepampa',
            'cod_ubig' => '8',
            'provincia_id' => '66'
        ]);
        District::create([
            'name_distrito' => 'Sexi',
            'cod_ubig' => '9',
            'provincia_id' => '66'
        ]);
        District::create([
            'name_distrito' => 'Uticyacu',
            'cod_ubig' => '10',
            'provincia_id' => '66'
        ]);
        District::create([
            'name_distrito' => 'Yauyucan',
            'cod_ubig' => '11',
            'provincia_id' => '66'
        ]);


        District::create([
            'name_distrito' => 'Callao',
            'cod_ubig' => '1',
            'provincia_id' => '67'
        ]);
        District::create([
            'name_distrito' => 'Bellavista',
            'cod_ubig' => '2',
            'provincia_id' => '67'
        ]);
        District::create([
            'name_distrito' => 'Carmen de la Legua Reynoso',
            'cod_ubig' => '3',
            'provincia_id' => '67'
        ]);
        District::create([
            'name_distrito' => 'La Perla',
            'cod_ubig' => '4',
            'provincia_id' => '67'
        ]);
        District::create([
            'name_distrito' => 'La Punta',
            'cod_ubig' => '5',
            'provincia_id' => '67'
        ]);
        District::create([
            'name_distrito' => 'Ventanilla',
            'cod_ubig' => '6',
            'provincia_id' => '67'
        ]);
        District::create([
            'name_distrito' => 'Mi Perú',
            'cod_ubig' => '7',
            'provincia_id' => '67'
        ]);


        District::create([
            'name_distrito' => 'Cusco',
            'cod_ubig' => '1',
            'provincia_id' => '68'
        ]);
        District::create([
            'name_distrito' => 'Ccorca',
            'cod_ubig' => '2',
            'provincia_id' => '68'
        ]);
        District::create([
            'name_distrito' => 'Poroy',
            'cod_ubig' => '3',
            'provincia_id' => '68'
        ]);
        District::create([
            'name_distrito' => 'San Jerónimo',
            'cod_ubig' => '4',
            'provincia_id' => '68'
        ]);
        District::create([
            'name_distrito' => 'San Sebastian',
            'cod_ubig' => '5',
            'provincia_id' => '68'
        ]);
        District::create([
            'name_distrito' => 'Santiago',
            'cod_ubig' => '6',
            'provincia_id' => '68'
        ]);
        District::create([
            'name_distrito' => 'Saylla',
            'cod_ubig' => '7',
            'provincia_id' => '68'
        ]);
        District::create([
            'name_distrito' => 'Wanchaq',
            'cod_ubig' => '8',
            'provincia_id' => '68'
        ]);


        District::create([
            'name_distrito' => 'Acomayo',
            'cod_ubig' => '1',
            'provincia_id' => '69'
        ]);
        District::create([
            'name_distrito' => 'Acopia',
            'cod_ubig' => '2',
            'provincia_id' => '69'
        ]);
        District::create([
            'name_distrito' => 'Acos',
            'cod_ubig' => '3',
            'provincia_id' => '69'
        ]);
        District::create([
            'name_distrito' => 'Mosoc Llacta',
            'cod_ubig' => '4',
            'provincia_id' => '69'
        ]);
        District::create([
            'name_distrito' => 'Pomacanchi',
            'cod_ubig' => '5',
            'provincia_id' => '69'
        ]);
        District::create([
            'name_distrito' => 'Rondocan',
            'cod_ubig' => '6',
            'provincia_id' => '69'
        ]);
        District::create([
            'name_distrito' => 'Sangarara',
            'cod_ubig' => '7',
            'provincia_id' => '69'
        ]);



        District::create([
            'name_distrito' => 'Anta',
            'cod_ubig' => '1',
            'provincia_id' => '70'
        ]);
        District::create([
            'name_distrito' => 'Ancahuasi',
            'cod_ubig' => '2',
            'provincia_id' => '70'
        ]);
        District::create([
            'name_distrito' => 'Cachimayo',
            'cod_ubig' => '3',
            'provincia_id' => '70'
        ]);
        District::create([
            'name_distrito' => 'Chinchaypujio',
            'cod_ubig' => '4',
            'provincia_id' => '70'
        ]);
        District::create([
            'name_distrito' => 'Huarocondo',
            'cod_ubig' => '5',
            'provincia_id' => '70'
        ]);
        District::create([
            'name_distrito' => 'Limatambo',
            'cod_ubig' => '6',
            'provincia_id' => '70'
        ]);
        District::create([
            'name_distrito' => 'Mollepata',
            'cod_ubig' => '7',
            'provincia_id' => '70'
        ]);
        District::create([
            'name_distrito' => 'Pucyura',
            'cod_ubig' => '8',
            'provincia_id' => '70'
        ]);
        District::create([
            'name_distrito' => 'Zurite',
            'cod_ubig' => '9',
            'provincia_id' => '70'
        ]);



        District::create([
            'name_distrito' => 'Calca',
            'cod_ubig' => '1',
            'provincia_id' => '71'
        ]);
        District::create([
            'name_distrito' => 'Coya',
            'cod_ubig' => '2',
            'provincia_id' => '71'
        ]);
        District::create([
            'name_distrito' => 'Lamay',
            'cod_ubig' => '3',
            'provincia_id' => '71'
        ]);
        District::create([
            'name_distrito' => 'Lares',
            'cod_ubig' => '4',
            'provincia_id' => '71'
        ]);
        District::create([
            'name_distrito' => 'Pisac',
            'cod_ubig' => '5',
            'provincia_id' => '71'
        ]);
        District::create([
            'name_distrito' => 'San Salvador',
            'cod_ubig' => '6',
            'provincia_id' => '71'
        ]);
        District::create([
            'name_distrito' => 'Taray',
            'cod_ubig' => '7',
            'provincia_id' => '71'
        ]);
        District::create([
            'name_distrito' => 'Yanatile',
            'cod_ubig' => '8',
            'provincia_id' => '71'
        ]);


        District::create([
            'name_distrito' => 'Yanaoca',
            'cod_ubig' => '1',
            'provincia_id' => '72'
        ]);
        District::create([
            'name_distrito' => 'Checca',
            'cod_ubig' => '2',
            'provincia_id' => '72'
        ]);
        District::create([
            'name_distrito' => 'Kunturkanki',
            'cod_ubig' => '3',
            'provincia_id' => '72'
        ]);
        District::create([
            'name_distrito' => 'Langui',
            'cod_ubig' => '4',
            'provincia_id' => '72'
        ]);
        District::create([
            'name_distrito' => 'Layo',
            'cod_ubig' => '5',
            'provincia_id' => '72'
        ]);
        District::create([
            'name_distrito' => 'Pampamarca',
            'cod_ubig' => '6',
            'provincia_id' => '72'
        ]);
        District::create([
            'name_distrito' => 'Quehue',
            'cod_ubig' => '7',
            'provincia_id' => '72'
        ]);
        District::create([
            'name_distrito' => 'Tupac Amaru',
            'cod_ubig' => '8',
            'provincia_id' => '72'
        ]);



        District::create([
            'name_distrito' => 'Sicuani',
            'cod_ubig' => '1',
            'provincia_id' => '73'
        ]);
        District::create([
            'name_distrito' => 'Checacupe',
            'cod_ubig' => '2',
            'provincia_id' => '73'
        ]);
        District::create([
            'name_distrito' => 'Combapata',
            'cod_ubig' => '3',
            'provincia_id' => '73'
        ]);
        District::create([
            'name_distrito' => 'Marangani',
            'cod_ubig' => '4',
            'provincia_id' => '73'
        ]);
        District::create([
            'name_distrito' => 'Pitumarca',
            'cod_ubig' => '5',
            'provincia_id' => '73'
        ]);
        District::create([
            'name_distrito' => 'San Pablo',
            'cod_ubig' => '6',
            'provincia_id' => '73'
        ]);
        District::create([
            'name_distrito' => 'San Pedro',
            'cod_ubig' => '7',
            'provincia_id' => '73'
        ]);
        District::create([
            'name_distrito' => 'Tinta',
            'cod_ubig' => '8',
            'provincia_id' => '73'
        ]);



        District::create([
            'name_distrito' => 'Santo Tomas',
            'cod_ubig' => '1',
            'provincia_id' => '74'
        ]);
        District::create([
            'name_distrito' => 'Capacmarca',
            'cod_ubig' => '2',
            'provincia_id' => '74'
        ]);
        District::create([
            'name_distrito' => 'Chamaca',
            'cod_ubig' => '3',
            'provincia_id' => '74'
        ]);
        District::create([
            'name_distrito' => 'Colquemarca',
            'cod_ubig' => '4',
            'provincia_id' => '74'
        ]);
        District::create([
            'name_distrito' => 'Livitaca',
            'cod_ubig' => '5',
            'provincia_id' => '74'
        ]);
        District::create([
            'name_distrito' => 'Llusco',
            'cod_ubig' => '6',
            'provincia_id' => '74'
        ]);
        District::create([
            'name_distrito' => 'Quiñota',
            'cod_ubig' => '7',
            'provincia_id' => '74'
        ]);
        District::create([
            'name_distrito' => 'Velille',
            'cod_ubig' => '8',
            'provincia_id' => '74'
        ]);


        District::create([
            'name_distrito' => 'Espinar',
            'cod_ubig' => '1',
            'provincia_id' => '75'
        ]);
        District::create([
            'name_distrito' => 'Condoroma',
            'cod_ubig' => '2',
            'provincia_id' => '75'
        ]);
        District::create([
            'name_distrito' => 'Coporaque',
            'cod_ubig' => '3',
            'provincia_id' => '75'
        ]);
        District::create([
            'name_distrito' => 'Ocoruro',
            'cod_ubig' => '4',
            'provincia_id' => '75'
        ]);
        District::create([
            'name_distrito' => 'Pallpata',
            'cod_ubig' => '5',
            'provincia_id' => '75'
        ]);
        District::create([
            'name_distrito' => 'Pichigua',
            'cod_ubig' => '6',
            'provincia_id' => '75'
        ]);
        District::create([
            'name_distrito' => 'Suyckutambo',
            'cod_ubig' => '7',
            'provincia_id' => '75'
        ]);
        District::create([
            'name_distrito' => 'Alto Pichigua',
            'cod_ubig' => '8',
            'provincia_id' => '75'
        ]);


        District::create([
            'name_distrito' => 'Santa Ana',
            'cod_ubig' => '1',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Echarate',
            'cod_ubig' => '2',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Huayopata',
            'cod_ubig' => '3',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Maranura',
            'cod_ubig' => '4',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Ocobamba',
            'cod_ubig' => '5',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Quellouno',
            'cod_ubig' => '6',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Kimbiri',
            'cod_ubig' => '7',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Santa Teresa',
            'cod_ubig' => '8',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Vilcabamba',
            'cod_ubig' => '9',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Pichari',
            'cod_ubig' => '10',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Inkawasi',
            'cod_ubig' => '11',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Villa Virgen',
            'cod_ubig' => '12',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Villa Kintiarina',
            'cod_ubig' => '13',
            'provincia_id' => '76'
        ]);
        District::create([
            'name_distrito' => 'Megantoni',
            'cod_ubig' => '14',
            'provincia_id' => '76'
        ]);



        District::create([
            'name_distrito' => 'Paruro',
            'cod_ubig' => '1',
            'provincia_id' => '77'
        ]);
        District::create([
            'name_distrito' => 'Accha',
            'cod_ubig' => '2',
            'provincia_id' => '77'
        ]);
        District::create([
            'name_distrito' => 'Ccapi',
            'cod_ubig' => '3',
            'provincia_id' => '77'
        ]);
        District::create([
            'name_distrito' => 'Colcha',
            'cod_ubig' => '4',
            'provincia_id' => '77'
        ]);
        District::create([
            'name_distrito' => 'Huanoquite',
            'cod_ubig' => '5',
            'provincia_id' => '77'
        ]);
        District::create([
            'name_distrito' => 'Omacha',
            'cod_ubig' => '6',
            'provincia_id' => '77'
        ]);
        District::create([
            'name_distrito' => 'Paccaritambo',
            'cod_ubig' => '7',
            'provincia_id' => '77'
        ]);
        District::create([
            'name_distrito' => 'Pillpinto',
            'cod_ubig' => '8',
            'provincia_id' => '77'
        ]);
        District::create([
            'name_distrito' => 'Yaurisque',
            'cod_ubig' => '9',
            'provincia_id' => '77'
        ]);



        District::create([
            'name_distrito' => 'Paucartambo',
            'cod_ubig' => '1',
            'provincia_id' => '78'
        ]);
        District::create([
            'name_distrito' => 'Caicay',
            'cod_ubig' => '2',
            'provincia_id' => '78'
        ]);
        District::create([
            'name_distrito' => 'Challabamba',
            'cod_ubig' => '3',
            'provincia_id' => '78'
        ]);
        District::create([
            'name_distrito' => 'Colquepata',
            'cod_ubig' => '4',
            'provincia_id' => '78'
        ]);
        District::create([
            'name_distrito' => 'Huancarani',
            'cod_ubig' => '5',
            'provincia_id' => '78'
        ]);
        District::create([
            'name_distrito' => 'Kosñipata',
            'cod_ubig' => '6',
            'provincia_id' => '78'
        ]);


        District::create([
            'name_distrito' => 'Urcos',
            'cod_ubig' => '1',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Andahuaylillas',
            'cod_ubig' => '2',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Camanti',
            'cod_ubig' => '3',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Ccarhuayo',
            'cod_ubig' => '4',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Ccatca',
            'cod_ubig' => '5',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Cusipata',
            'cod_ubig' => '6',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Huaro',
            'cod_ubig' => '7',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Lucre',
            'cod_ubig' => '8',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Marcapata',
            'cod_ubig' => '9',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Ocongate',
            'cod_ubig' => '10',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Oropesa',
            'cod_ubig' => '11',
            'provincia_id' => '79'
        ]);
        District::create([
            'name_distrito' => 'Quiquijana',
            'cod_ubig' => '12',
            'provincia_id' => '79'
        ]);



        District::create([
            'name_distrito' => 'Urubamba',
            'cod_ubig' => '1',
            'provincia_id' => '80'
        ]);
        District::create([
            'name_distrito' => 'Chinchero',
            'cod_ubig' => '2',
            'provincia_id' => '80'
        ]);
        District::create([
            'name_distrito' => 'Huayllabamba',
            'cod_ubig' => '3',
            'provincia_id' => '80'
        ]);
        District::create([
            'name_distrito' => 'Machupicchu',
            'cod_ubig' => '4',
            'provincia_id' => '80'
        ]);
        District::create([
            'name_distrito' => 'Maras',
            'cod_ubig' => '5',
            'provincia_id' => '80'
        ]);
        District::create([
            'name_distrito' => 'Ollantaytambo',
            'cod_ubig' => '6',
            'provincia_id' => '80'
        ]);
        District::create([
            'name_distrito' => 'Yucay',
            'cod_ubig' => '7',
            'provincia_id' => '80'
        ]);


        District::create([
            'name_distrito' => 'Huancavelica',
            'cod_ubig' => '1',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Acobambilla',
            'cod_ubig' => '2',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Acoria',
            'cod_ubig' => '3',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Conayca',
            'cod_ubig' => '4',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Cuenca',
            'cod_ubig' => '5',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Huachocolpa',
            'cod_ubig' => '6',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Huayllahuara',
            'cod_ubig' => '7',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Izcuchaca',
            'cod_ubig' => '8',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Laria',
            'cod_ubig' => '9',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Manta',
            'cod_ubig' => '10',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Mariscal Cáceres',
            'cod_ubig' => '11',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Moya',
            'cod_ubig' => '12',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Nuevo Occoro',
            'cod_ubig' => '13',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Palca',
            'cod_ubig' => '14',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Pilchaca',
            'cod_ubig' => '15',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Vilca',
            'cod_ubig' => '16',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Yauli',
            'cod_ubig' => '17',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Ascensión',
            'cod_ubig' => '18',
            'provincia_id' => '81'
        ]);
        District::create([
            'name_distrito' => 'Huando',
            'cod_ubig' => '19',
            'provincia_id' => '81'
        ]);


        District::create([
            'name_distrito' => 'Acobamba',
            'cod_ubig' => '1',
            'provincia_id' => '82'
        ]);
        District::create([
            'name_distrito' => 'Andabamba',
            'cod_ubig' => '2',
            'provincia_id' => '82'
        ]);
        District::create([
            'name_distrito' => 'Anta',
            'cod_ubig' => '3',
            'provincia_id' => '82'
        ]);
        District::create([
            'name_distrito' => 'Caja',
            'cod_ubig' => '4',
            'provincia_id' => '82'
        ]);
        District::create([
            'name_distrito' => 'Marcas',
            'cod_ubig' => '5',
            'provincia_id' => '82'
        ]);
        District::create([
            'name_distrito' => 'Paucara',
            'cod_ubig' => '6',
            'provincia_id' => '82'
        ]);
        District::create([
            'name_distrito' => 'Pomacocha',
            'cod_ubig' => '7',
            'provincia_id' => '82'
        ]);
        District::create([
            'name_distrito' => 'Rosario',
            'cod_ubig' => '8',
            'provincia_id' => '82'
        ]);


        District::create([
            'name_distrito' => 'Lircay',
            'cod_ubig' => '1',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'Anchonga',
            'cod_ubig' => '2',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'Callanmarca',
            'cod_ubig' => '3',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'Ccochaccasa',
            'cod_ubig' => '4',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'Chincho',
            'cod_ubig' => '5',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'Congalla',
            'cod_ubig' => '6',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'Huanca-Huanca',
            'cod_ubig' => '7',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'Huayllay Grande',
            'cod_ubig' => '8',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'Julcamarca',
            'cod_ubig' => '9',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'San Antonio de Antaparco',
            'cod_ubig' => '10',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'Santo Tomas de Pata',
            'cod_ubig' => '11',
            'provincia_id' => '83'
        ]);
        District::create([
            'name_distrito' => 'Secclla',
            'cod_ubig' => '12',
            'provincia_id' => '83'
        ]);


        District::create([
            'name_distrito' => 'Castrovirreyna',
            'cod_ubig' => '1',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Arma',
            'cod_ubig' => '2',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Aurahua',
            'cod_ubig' => '3',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Capillas',
            'cod_ubig' => '4',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Chupamarca',
            'cod_ubig' => '5',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Cocas',
            'cod_ubig' => '6',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Huachos',
            'cod_ubig' => '7',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Huamatambo',
            'cod_ubig' => '8',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Mollepampa',
            'cod_ubig' => '9',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'San Juan',
            'cod_ubig' => '10',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Santa Ana',
            'cod_ubig' => '11',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Tantara',
            'cod_ubig' => '12',
            'provincia_id' => '84'
        ]);
        District::create([
            'name_distrito' => 'Ticrapo',
            'cod_ubig' => '13',
            'provincia_id' => '84'
        ]);



        District::create([
            'name_distrito' => 'Churcampa',
            'cod_ubig' => '1',
            'provincia_id' => '85'
        ]);
        District::create([
            'name_distrito' => 'Anco',
            'cod_ubig' => '2',
            'provincia_id' => '85'
        ]);
        District::create([
            'name_distrito' => 'Chinchihuasi',
            'cod_ubig' => '3',
            'provincia_id' => '85'
        ]);
        District::create([
            'name_distrito' => 'El Carmen',
            'cod_ubig' => '4',
            'provincia_id' => '85'
        ]);
        District::create([
            'name_distrito' => 'La Merced',
            'cod_ubig' => '5',
            'provincia_id' => '85'
        ]);
        District::create([
            'name_distrito' => 'Locroja',
            'cod_ubig' => '6',
            'provincia_id' => '85'
        ]);
        District::create([
            'name_distrito' => 'Paucarbamba',
            'cod_ubig' => '7',
            'provincia_id' => '85'
        ]);
        District::create([
            'name_distrito' => 'San Miguel de Mayocc',
            'cod_ubig' => '8',
            'provincia_id' => '85'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Coris',
            'cod_ubig' => '9',
            'provincia_id' => '85'
        ]);
        District::create([
            'name_distrito' => 'Pachamarca',
            'cod_ubig' => '10',
            'provincia_id' => '85'
        ]);
        District::create([
            'name_distrito' => 'Cosme',
            'cod_ubig' => '11',
            'provincia_id' => '85'
        ]);



        District::create([
            'name_distrito' => 'Huaytara',
            'cod_ubig' => '1',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Ayavi',
            'cod_ubig' => '2',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Córdova',
            'cod_ubig' => '3',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Huayacundo Arma',
            'cod_ubig' => '4',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Laramarca',
            'cod_ubig' => '5',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Ocoyo',
            'cod_ubig' => '6',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Pilpichaca',
            'cod_ubig' => '7',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Querco',
            'cod_ubig' => '8',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Quito-Arma',
            'cod_ubig' => '9',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'San Antonio de Cusicancha',
            'cod_ubig' => '10',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'San Francisco de Sangayaico',
            'cod_ubig' => '11',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'San Isidro',
            'cod_ubig' => '12',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Chocorvos',
            'cod_ubig' => '13',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Quirahuara',
            'cod_ubig' => '14',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Santo Domingo de Capillas',
            'cod_ubig' => '15',
            'provincia_id' => '86'
        ]);
        District::create([
            'name_distrito' => 'Tambo',
            'cod_ubig' => '16',
            'provincia_id' => '86'
        ]);



        District::create([
            'name_distrito' => 'Pampas',
            'cod_ubig' => '1',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Acostambo',
            'cod_ubig' => '2',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Acraquia',
            'cod_ubig' => '3',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Ahuaycha',
            'cod_ubig' => '4',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Colcabamba',
            'cod_ubig' => '5',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Daniel Hernández',
            'cod_ubig' => '6',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Huachocolpa',
            'cod_ubig' => '7',
            'provincia_id' => '87'
        ]);
        /*District::create([
            'name_distrito' => 'Chachapoyas',
            'cod_ubig' => '8',
            'provincia_id' => '87'
        ]);*/
        District::create([
            'name_distrito' => 'Huaribamba',
            'cod_ubig' => '9',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Ñahuimpuquio',
            'cod_ubig' => '10',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Pazos',
            'cod_ubig' => '11',
            'provincia_id' => '87'
        ]);
        /*
        District::create([
            'name_distrito' => 'Chachapoyas',
            'cod_ubig' => '12',
            'provincia_id' => '87'
        ]);*/
        District::create([
            'name_distrito' => 'Quishuar',
            'cod_ubig' => '13',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Salcabamba',
            'cod_ubig' => '14',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Salcahuasi',
            'cod_ubig' => '15',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'San Marcos de Rocchac',
            'cod_ubig' => '16',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Surcubamba',
            'cod_ubig' => '17',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Tintay Puncu',
            'cod_ubig' => '18',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Quichuas',
            'cod_ubig' => '19',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Andaymarca',
            'cod_ubig' => '20',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Roble',
            'cod_ubig' => '21',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Pichos',
            'cod_ubig' => '22',
            'provincia_id' => '87'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Tucuma',
            'cod_ubig' => '23',
            'provincia_id' => '87'
        ]);



        District::create([
            'name_distrito' => 'Huanuco',
            'cod_ubig' => '1',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'Amarilis',
            'cod_ubig' => '2',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'Chinchao',
            'cod_ubig' => '3',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'Churubamba',
            'cod_ubig' => '4',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'Margos',
            'cod_ubig' => '5',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'Quisqui (Kichki)',
            'cod_ubig' => '6',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'San Francisco de Cayran',
            'cod_ubig' => '7',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Chaulan',
            'cod_ubig' => '8',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'Santa María del Valle',
            'cod_ubig' => '9',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'Yarumayo',
            'cod_ubig' => '10',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'Pillco Marca',
            'cod_ubig' => '11',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'Yacus',
            'cod_ubig' => '12',
            'provincia_id' => '88'
        ]);
        District::create([
            'name_distrito' => 'San Pablo de Pillao',
            'cod_ubig' => '13',
            'provincia_id' => '88'
        ]);



        District::create([
            'name_distrito' => 'Ambo',
            'cod_ubig' => '1',
            'provincia_id' => '89'
        ]);
        District::create([
            'name_distrito' => 'Cayna',
            'cod_ubig' => '2',
            'provincia_id' => '89'
        ]);
        District::create([
            'name_distrito' => 'Colpas',
            'cod_ubig' => '3',
            'provincia_id' => '89'
        ]);
        District::create([
            'name_distrito' => 'Conchamarca',
            'cod_ubig' => '4',
            'provincia_id' => '89'
        ]);
        District::create([
            'name_distrito' => 'Huacar',
            'cod_ubig' => '5',
            'provincia_id' => '89'
        ]);
        District::create([
            'name_distrito' => 'San Francisco',
            'cod_ubig' => '6',
            'provincia_id' => '89'
        ]);
        District::create([
            'name_distrito' => 'San Rafael',
            'cod_ubig' => '7',
            'provincia_id' => '89'
        ]);
        District::create([
            'name_distrito' => 'Tomay Kichwa',
            'cod_ubig' => '8',
            'provincia_id' => '89'
        ]);



        District::create([
            'name_distrito' => 'La Unión',
            'cod_ubig' => '1',
            'provincia_id' => '90'
        ]);
        District::create([
            'name_distrito' => 'Chuquis',
            'cod_ubig' => '7',
            'provincia_id' => '90'
        ]);
        District::create([
            'name_distrito' => 'Marías',
            'cod_ubig' => '11',
            'provincia_id' => '90'
        ]);
        District::create([
            'name_distrito' => 'Pachas',
            'cod_ubig' => '13',
            'provincia_id' => '90'
        ]);
        District::create([
            'name_distrito' => 'Quivilla',
            'cod_ubig' => '16',
            'provincia_id' => '90'
        ]);
        District::create([
            'name_distrito' => 'Ripan',
            'cod_ubig' => '17',
            'provincia_id' => '90'
        ]);
        District::create([
            'name_distrito' => 'Shunqui',
            'cod_ubig' => '21',
            'provincia_id' => '90'
        ]);
        District::create([
            'name_distrito' => 'Sillapata',
            'cod_ubig' => '22',
            'provincia_id' => '90'
        ]);
        District::create([
            'name_distrito' => 'Yanas',
            'cod_ubig' => '23',
            'provincia_id' => '90'
        ]);


        District::create([
            'name_distrito' => 'Huacaybamba',
            'cod_ubig' => '1',
            'provincia_id' => '91'
        ]);
        District::create([
            'name_distrito' => 'Canchabamba',
            'cod_ubig' => '2',
            'provincia_id' => '91'
        ]);
        District::create([
            'name_distrito' => 'Cochabamba',
            'cod_ubig' => '3',
            'provincia_id' => '91'
        ]);
        District::create([
            'name_distrito' => 'Pinra',
            'cod_ubig' => '4',
            'provincia_id' => '91'
        ]);


        District::create([
            'name_distrito' => 'Llata',
            'cod_ubig' => '1',
            'provincia_id' => '92'
        ]);
        District::create([
            'name_distrito' => 'Arancay',
            'cod_ubig' => '2',
            'provincia_id' => '92'
        ]);
        District::create([
            'name_distrito' => 'Chavín de Pariarca',
            'cod_ubig' => '3',
            'provincia_id' => '92'
        ]);
        District::create([
            'name_distrito' => 'Jacas Grande',
            'cod_ubig' => '4',
            'provincia_id' => '92'
        ]);
        District::create([
            'name_distrito' => 'Jircan',
            'cod_ubig' => '5',
            'provincia_id' => '92'
        ]);
        District::create([
            'name_distrito' => 'Miraflores',
            'cod_ubig' => '6',
            'provincia_id' => '92'
        ]);
        District::create([
            'name_distrito' => 'Monzón',
            'cod_ubig' => '7',
            'provincia_id' => '92'
        ]);
        District::create([
            'name_distrito' => 'Punchao',
            'cod_ubig' => '8',
            'provincia_id' => '92'
        ]);
        District::create([
            'name_distrito' => 'Puños',
            'cod_ubig' => '9',
            'provincia_id' => '92'
        ]);
        District::create([
            'name_distrito' => 'Singa',
            'cod_ubig' => '10',
            'provincia_id' => '92'
        ]);
        District::create([
            'name_distrito' => 'Tantamayo',
            'cod_ubig' => '11',
            'provincia_id' => '92'
        ]);


        District::create([
            'name_distrito' => 'Rupa-Rupa',
            'cod_ubig' => '1',
            'provincia_id' => '93'
        ]);
        District::create([
            'name_distrito' => 'Daniel Alomía Robles',
            'cod_ubig' => '2',
            'provincia_id' => '93'
        ]);
        District::create([
            'name_distrito' => 'Hermílio Valdizan',
            'cod_ubig' => '3',
            'provincia_id' => '93'
        ]);
        District::create([
            'name_distrito' => 'José Crespo y Castillo',
            'cod_ubig' => '4',
            'provincia_id' => '93'
        ]);
        District::create([
            'name_distrito' => 'Luyando',
            'cod_ubig' => '5',
            'provincia_id' => '93'
        ]);
        District::create([
            'name_distrito' => 'Mariano Damaso Beraun',
            'cod_ubig' => '6',
            'provincia_id' => '93'
        ]);
        District::create([
            'name_distrito' => 'Pucayacu',
            'cod_ubig' => '7',
            'provincia_id' => '93'
        ]);
        District::create([
            'name_distrito' => 'Castillo Grande',
            'cod_ubig' => '8',
            'provincia_id' => '93'
        ]);
        District::create([
            'name_distrito' => 'Pueblo Nuevo',
            'cod_ubig' => '9',
            'provincia_id' => '93'
        ]);
        District::create([
            'name_distrito' => 'Santo Domingo de Anda',
            'cod_ubig' => '10',
            'provincia_id' => '93'
        ]);



        District::create([
            'name_distrito' => 'Huacrachuco',
            'cod_ubig' => '1',
            'provincia_id' => '94'
        ]);
        District::create([
            'name_distrito' => 'Cholon',
            'cod_ubig' => '2',
            'provincia_id' => '94'
        ]);
        District::create([
            'name_distrito' => 'San Buenaventura',
            'cod_ubig' => '3',
            'provincia_id' => '94'
        ]);
        District::create([
            'name_distrito' => 'La Morada',
            'cod_ubig' => '4',
            'provincia_id' => '94'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa de Alto Yanajanca',
            'cod_ubig' => '5',
            'provincia_id' => '94'
        ]);



        District::create([
            'name_distrito' => 'Panao',
            'cod_ubig' => '1',
            'provincia_id' => '95'
        ]);
        District::create([
            'name_distrito' => 'Chaglla',
            'cod_ubig' => '2',
            'provincia_id' => '95'
        ]);
        District::create([
            'name_distrito' => 'Molino',
            'cod_ubig' => '3',
            'provincia_id' => '95'
        ]);
        District::create([
            'name_distrito' => 'Umari',
            'cod_ubig' => '4',
            'provincia_id' => '95'
        ]);


        District::create([
            'name_distrito' => 'Puerto Inca',
            'cod_ubig' => '1',
            'provincia_id' => '96'
        ]);
        District::create([
            'name_distrito' => 'Codo del Pozuzo',
            'cod_ubig' => '2',
            'provincia_id' => '96'
        ]);
        District::create([
            'name_distrito' => 'Honoria',
            'cod_ubig' => '3',
            'provincia_id' => '96'
        ]);
        District::create([
            'name_distrito' => 'Tournavista',
            'cod_ubig' => '4',
            'provincia_id' => '96'
        ]);
        District::create([
            'name_distrito' => 'Yuyapichis',
            'cod_ubig' => '5',
            'provincia_id' => '96'
        ]);



        District::create([
            'name_distrito' => 'Jesús',
            'cod_ubig' => '1',
            'provincia_id' => '97'
        ]);
        District::create([
            'name_distrito' => 'Baños',
            'cod_ubig' => '2',
            'provincia_id' => '97'
        ]);
        District::create([
            'name_distrito' => 'Jivia',
            'cod_ubig' => '3',
            'provincia_id' => '97'
        ]);
        District::create([
            'name_distrito' => 'Queropalca',
            'cod_ubig' => '4',
            'provincia_id' => '97'
        ]);
        District::create([
            'name_distrito' => 'Rondos',
            'cod_ubig' => '5',
            'provincia_id' => '97'
        ]);
        District::create([
            'name_distrito' => 'San Francisco de Asís',
            'cod_ubig' => '6',
            'provincia_id' => '97'
        ]);
        District::create([
            'name_distrito' => 'San Miguel de Cauri',
            'cod_ubig' => '7',
            'provincia_id' => '97'
        ]);


        District::create([
            'name_distrito' => 'Chavinillo',
            'cod_ubig' => '1',
            'provincia_id' => '98'
        ]);
        District::create([
            'name_distrito' => 'Cahuac',
            'cod_ubig' => '2',
            'provincia_id' => '98'
        ]);
        District::create([
            'name_distrito' => 'Chacabamba',
            'cod_ubig' => '3',
            'provincia_id' => '98'
        ]);
        District::create([
            'name_distrito' => 'Aparicio Pomares',
            'cod_ubig' => '4',
            'provincia_id' => '98'
        ]);
        District::create([
            'name_distrito' => 'Jacas Chico',
            'cod_ubig' => '5',
            'provincia_id' => '98'
        ]);
        District::create([
            'name_distrito' => 'Obas',
            'cod_ubig' => '6',
            'provincia_id' => '98'
        ]);
        District::create([
            'name_distrito' => 'Pampamarca',
            'cod_ubig' => '7',
            'provincia_id' => '98'
        ]);
        District::create([
            'name_distrito' => 'Choras',
            'cod_ubig' => '8',
            'provincia_id' => '98'
        ]);



        District::create([
            'name_distrito' => 'Ica',
            'cod_ubig' => '1',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'La Tinguiña',
            'cod_ubig' => '2',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'Los Aquijes',
            'cod_ubig' => '3',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'Ocucaje',
            'cod_ubig' => '4',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'Pachacutec',
            'cod_ubig' => '5',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'Parcona',
            'cod_ubig' => '6',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'Pueblo Nuevo',
            'cod_ubig' => '7',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'Salas',
            'cod_ubig' => '8',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'San José de Los Molinos',
            'cod_ubig' => '9',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'San Juan Bautista',
            'cod_ubig' => '10',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'Santiago',
            'cod_ubig' => '11',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'Subtanjalla',
            'cod_ubig' => '12',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'Tate',
            'cod_ubig' => '13',
            'provincia_id' => '99'
        ]);
        District::create([
            'name_distrito' => 'Yauca del Rosario',
            'cod_ubig' => '14',
            'provincia_id' => '99'
        ]);


        District::create([
            'name_distrito' => 'Chincha Alta',
            'cod_ubig' => '1',
            'provincia_id' => '100'
        ]);
        District::create([
            'name_distrito' => 'Alto Laran',
            'cod_ubig' => '2',
            'provincia_id' => '100'
        ]);
        District::create([
            'name_distrito' => 'Chavin',
            'cod_ubig' => '3',
            'provincia_id' => '100'
        ]);
        District::create([
            'name_distrito' => 'Chincha Baja',
            'cod_ubig' => '4',
            'provincia_id' => '100'
        ]);
        District::create([
            'name_distrito' => 'El Carmen',
            'cod_ubig' => '5',
            'provincia_id' => '100'
        ]);
        District::create([
            'name_distrito' => 'Grocio Prado',
            'cod_ubig' => '6',
            'provincia_id' => '100'
        ]);
        District::create([
            'name_distrito' => 'Pueblo Nuevo',
            'cod_ubig' => '7',
            'provincia_id' => '100'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Yanac',
            'cod_ubig' => '8',
            'provincia_id' => '100'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Huacarpana',
            'cod_ubig' => '9',
            'provincia_id' => '100'
        ]);
        District::create([
            'name_distrito' => 'Sunampe',
            'cod_ubig' => '10',
            'provincia_id' => '100'
        ]);
        District::create([
            'name_distrito' => 'Tambo de Mora',
            'cod_ubig' => '11',
            'provincia_id' => '100'
        ]);


        District::create([
            'name_distrito' => 'Nasca',
            'cod_ubig' => '1',
            'provincia_id' => '101'
        ]);
        District::create([
            'name_distrito' => 'Changuillo',
            'cod_ubig' => '2',
            'provincia_id' => '101'
        ]);
        District::create([
            'name_distrito' => 'El Ingenio',
            'cod_ubig' => '3',
            'provincia_id' => '101'
        ]);
        District::create([
            'name_distrito' => 'Marcona',
            'cod_ubig' => '4',
            'provincia_id' => '101'
        ]);
        District::create([
            'name_distrito' => 'Vista Alegre',
            'cod_ubig' => '5',
            'provincia_id' => '101'
        ]);


        District::create([
            'name_distrito' => 'Palpa',
            'cod_ubig' => '1',
            'provincia_id' => '102'
        ]);
        District::create([
            'name_distrito' => 'Llipata',
            'cod_ubig' => '2',
            'provincia_id' => '102'
        ]);
        District::create([
            'name_distrito' => 'Río Grande',
            'cod_ubig' => '3',
            'provincia_id' => '102'
        ]);
        District::create([
            'name_distrito' => 'Santa Cruz',
            'cod_ubig' => '4',
            'provincia_id' => '102'
        ]);
        District::create([
            'name_distrito' => 'Tibillo',
            'cod_ubig' => '5',
            'provincia_id' => '102'
        ]);


        District::create([
            'name_distrito' => 'Pisco',
            'cod_ubig' => '1',
            'provincia_id' => '103'
        ]);
        District::create([
            'name_distrito' => 'Huancano',
            'cod_ubig' => '2',
            'provincia_id' => '103'
        ]);
        District::create([
            'name_distrito' => 'Humay',
            'cod_ubig' => '3',
            'provincia_id' => '103'
        ]);
        District::create([
            'name_distrito' => 'Independencia',
            'cod_ubig' => '4',
            'provincia_id' => '103'
        ]);
        District::create([
            'name_distrito' => 'Paracas',
            'cod_ubig' => '5',
            'provincia_id' => '103'
        ]);
        District::create([
            'name_distrito' => 'San Andrés',
            'cod_ubig' => '6',
            'provincia_id' => '103'
        ]);
        District::create([
            'name_distrito' => 'San Clemente',
            'cod_ubig' => '7',
            'provincia_id' => '103'
        ]);
        District::create([
            'name_distrito' => 'Tupac Amaru Inca',
            'cod_ubig' => '8',
            'provincia_id' => '103'
        ]);


        District::create([
            'name_distrito' => 'Huancayo',
            'cod_ubig' => '1',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Carhuacallanga',
            'cod_ubig' => '4',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Chacapampa',
            'cod_ubig' => '5',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Chicche',
            'cod_ubig' => '6',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Chilca',
            'cod_ubig' => '7',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Chongos Alto',
            'cod_ubig' => '8',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Chupuro',
            'cod_ubig' => '11',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Colca',
            'cod_ubig' => '12',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Cullhuas',
            'cod_ubig' => '13',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'El Tambo',
            'cod_ubig' => '14',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Huacrapuquio',
            'cod_ubig' => '16',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Hualhuas',
            'cod_ubig' => '17',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Huancan',
            'cod_ubig' => '19',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Huasicancha',
            'cod_ubig' => '20',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Huayucachi',
            'cod_ubig' => '21',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Ingenio',
            'cod_ubig' => '22',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Pariahuanca',
            'cod_ubig' => '24',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Pilcomayo',
            'cod_ubig' => '25',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Pucara',
            'cod_ubig' => '26',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Quichuay',
            'cod_ubig' => '27',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Quilcas',
            'cod_ubig' => '28',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'San Agustín',
            'cod_ubig' => '29',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'San Jerónimo de Tunan',
            'cod_ubig' => '30',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Saño',
            'cod_ubig' => '32',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Sapallanga',
            'cod_ubig' => '33',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Sicaya',
            'cod_ubig' => '34',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Santo Domingo de Acobamba',
            'cod_ubig' => '35',
            'provincia_id' => '104'
        ]);
        District::create([
            'name_distrito' => 'Viques',
            'cod_ubig' => '36',
            'provincia_id' => '104'
        ]);



        District::create([
            'name_distrito' => 'Concepción',
            'cod_ubig' => '1',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Aco',
            'cod_ubig' => '2',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Andamarca',
            'cod_ubig' => '3',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Chambara',
            'cod_ubig' => '4',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Cochas',
            'cod_ubig' => '5',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Comas',
            'cod_ubig' => '6',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Heroínas Toledo',
            'cod_ubig' => '7',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Manzanares',
            'cod_ubig' => '8',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Mariscal Castilla',
            'cod_ubig' => '9',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Matahuasi',
            'cod_ubig' => '10',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Mito',
            'cod_ubig' => '11',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Nueve de Julio',
            'cod_ubig' => '12',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Orcotuna',
            'cod_ubig' => '13',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'San José de Quero',
            'cod_ubig' => '14',
            'provincia_id' => '105'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa de Ocopa',
            'cod_ubig' => '15',
            'provincia_id' => '105'
        ]);


        District::create([
            'name_distrito' => 'Chanchamayo',
            'cod_ubig' => '1',
            'provincia_id' => '106'
        ]);
        District::create([
            'name_distrito' => 'Perene',
            'cod_ubig' => '2',
            'provincia_id' => '106'
        ]);
        District::create([
            'name_distrito' => 'Pichanaqui',
            'cod_ubig' => '3',
            'provincia_id' => '106'
        ]);
        District::create([
            'name_distrito' => 'San Luis de Shuaro',
            'cod_ubig' => '4',
            'provincia_id' => '106'
        ]);
        District::create([
            'name_distrito' => 'San Ramón',
            'cod_ubig' => '5',
            'provincia_id' => '106'
        ]);
        District::create([
            'name_distrito' => 'Vitoc',
            'cod_ubig' => '6',
            'provincia_id' => '106'
        ]);
        

        District::create([
            'name_distrito' => 'Jauja',
            'cod_ubig' => '1',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Acolla',
            'cod_ubig' => '2',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Apata',
            'cod_ubig' => '3',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Ataura',
            'cod_ubig' => '4',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Canchayllo',
            'cod_ubig' => '5',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Curicaca',
            'cod_ubig' => '6',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'El Mantaro',
            'cod_ubig' => '7',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Huamali',
            'cod_ubig' => '8',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Huaripampa',
            'cod_ubig' => '9',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Huertas',
            'cod_ubig' => '10',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Janjaillo',
            'cod_ubig' => '11',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Julcán',
            'cod_ubig' => '12',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Leonor Ordóñez',
            'cod_ubig' => '13',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Llocllapampa',
            'cod_ubig' => '14',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Marco',
            'cod_ubig' => '15',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Masma',
            'cod_ubig' => '16',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Masma Chicche',
            'cod_ubig' => '17',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Molinos',
            'cod_ubig' => '18',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Monobamba',
            'cod_ubig' => '19',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Muqui',
            'cod_ubig' => '20',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Muquiyauyo',
            'cod_ubig' => '21',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Paca',
            'cod_ubig' => '22',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Paccha',
            'cod_ubig' => '23',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Pancan',
            'cod_ubig' => '24',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Parco',
            'cod_ubig' => '25',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Pomacancha',
            'cod_ubig' => '26',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Ricran',
            'cod_ubig' => '27',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'San Lorenzo',
            'cod_ubig' => '28',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Chunan',
            'cod_ubig' => '29',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Sausa',
            'cod_ubig' => '30',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Sincos',
            'cod_ubig' => '31',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Tunan Marca',
            'cod_ubig' => '32',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Yauli',
            'cod_ubig' => '33',
            'provincia_id' => '107'
        ]);
        District::create([
            'name_distrito' => 'Yauyos',
            'cod_ubig' => '34',
            'provincia_id' => '107'
        ]);
        


        District::create([
            'name_distrito' => 'Junin',
            'cod_ubig' => '1',
            'provincia_id' => '108'
        ]);
        District::create([
            'name_distrito' => 'Carhuamayo',
            'cod_ubig' => '2',
            'provincia_id' => '108'
        ]);
        District::create([
            'name_distrito' => 'Ondores',
            'cod_ubig' => '3',
            'provincia_id' => '108'
        ]);
        District::create([
            'name_distrito' => 'Ulcumayo',
            'cod_ubig' => '4',
            'provincia_id' => '108'
        ]);



        District::create([
            'name_distrito' => 'Satipo',
            'cod_ubig' => '1',
            'provincia_id' => '109'
        ]);
        District::create([
            'name_distrito' => 'Coviriali',
            'cod_ubig' => '2',
            'provincia_id' => '109'
        ]);
        District::create([
            'name_distrito' => 'Llaylla',
            'cod_ubig' => '3',
            'provincia_id' => '109'
        ]);
        District::create([
            'name_distrito' => 'Mazamari',
            'cod_ubig' => '4',
            'provincia_id' => '109'
        ]);
        District::create([
            'name_distrito' => 'Pampa Hermosa',
            'cod_ubig' => '5',
            'provincia_id' => '109'
        ]);
        District::create([
            'name_distrito' => 'Pangoa',
            'cod_ubig' => '6',
            'provincia_id' => '109'
        ]);
        District::create([
            'name_distrito' => 'Río Negro',
            'cod_ubig' => '7',
            'provincia_id' => '109'
        ]);
        District::create([
            'name_distrito' => 'Río Tambo',
            'cod_ubig' => '8',
            'provincia_id' => '109'
        ]);
        District::create([
            'name_distrito' => 'Vizcatan del Ene',
            'cod_ubig' => '9',
            'provincia_id' => '109'
        ]);


        District::create([
            'name_distrito' => 'Tarma',
            'cod_ubig' => '1',
            'provincia_id' => '110'
        ]);
        District::create([
            'name_distrito' => 'Acobamba',
            'cod_ubig' => '2',
            'provincia_id' => '110'
        ]);
        District::create([
            'name_distrito' => 'Huaricolca',
            'cod_ubig' => '3',
            'provincia_id' => '110'
        ]);
        District::create([
            'name_distrito' => 'Huasahuasi',
            'cod_ubig' => '4',
            'provincia_id' => '110'
        ]);
        District::create([
            'name_distrito' => 'La Unión',
            'cod_ubig' => '5',
            'provincia_id' => '110'
        ]);
        District::create([
            'name_distrito' => 'Palca',
            'cod_ubig' => '6',
            'provincia_id' => '110'
        ]);
        District::create([
            'name_distrito' => 'Palcamayo',
            'cod_ubig' => '7',
            'provincia_id' => '110'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Cajas',
            'cod_ubig' => '8',
            'provincia_id' => '110'
        ]);
        District::create([
            'name_distrito' => 'Tapo',
            'cod_ubig' => '9',
            'provincia_id' => '110'
        ]);



        District::create([
            'name_distrito' => 'La Oroya',
            'cod_ubig' => '1',
            'provincia_id' => '111'
        ]);
        District::create([
            'name_distrito' => 'Chacapalpa',
            'cod_ubig' => '2',
            'provincia_id' => '111'
        ]);
        District::create([
            'name_distrito' => 'Huay-Huay',
            'cod_ubig' => '3',
            'provincia_id' => '111'
        ]);
        District::create([
            'name_distrito' => 'Marcapomacocha',
            'cod_ubig' => '4',
            'provincia_id' => '111'
        ]);
        District::create([
            'name_distrito' => 'Morococha',
            'cod_ubig' => '5',
            'provincia_id' => '111'
        ]);
        District::create([
            'name_distrito' => 'Paccha',
            'cod_ubig' => '6',
            'provincia_id' => '111'
        ]);
        District::create([
            'name_distrito' => 'Santa Bárbara de Carhuacayan',
            'cod_ubig' => '7',
            'provincia_id' => '111'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa de Sacco',
            'cod_ubig' => '8',
            'provincia_id' => '111'
        ]);
        District::create([
            'name_distrito' => 'Suitucancha',
            'cod_ubig' => '9',
            'provincia_id' => '111'
        ]);
        District::create([
            'name_distrito' => 'Yauli',
            'cod_ubig' => '10',
            'provincia_id' => '111'
        ]);



        District::create([
            'name_distrito' => 'Chupaca',
            'cod_ubig' => '1',
            'provincia_id' => '112'
        ]);
        District::create([
            'name_distrito' => 'Ahuac',
            'cod_ubig' => '2',
            'provincia_id' => '112'
        ]);
        District::create([
            'name_distrito' => 'Chongos Bajo',
            'cod_ubig' => '3',
            'provincia_id' => '112'
        ]);
        District::create([
            'name_distrito' => 'Huachac',
            'cod_ubig' => '4',
            'provincia_id' => '112'
        ]);
        District::create([
            'name_distrito' => 'Huamancaca Chico',
            'cod_ubig' => '5',
            'provincia_id' => '112'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Iscos',
            'cod_ubig' => '6',
            'provincia_id' => '112'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Jarpa',
            'cod_ubig' => '7',
            'provincia_id' => '112'
        ]);
        District::create([
            'name_distrito' => 'Tres de Diciembre',
            'cod_ubig' => '8',
            'provincia_id' => '112'
        ]);
        District::create([
            'name_distrito' => 'Yanacancha',
            'cod_ubig' => '9',
            'provincia_id' => '112'
        ]);


        District::create([
            'name_distrito' => 'Trujillo',
            'cod_ubig' => '1',
            'provincia_id' => '113'
        ]);
        District::create([
            'name_distrito' => 'El Porvenir',
            'cod_ubig' => '2',
            'provincia_id' => '113'
        ]);
        District::create([
            'name_distrito' => 'Florencia de Mora',
            'cod_ubig' => '3',
            'provincia_id' => '113'
        ]);
        District::create([
            'name_distrito' => 'Huanchaco',
            'cod_ubig' => '4',
            'provincia_id' => '113'
        ]);
        District::create([
            'name_distrito' => 'La Esperanza',
            'cod_ubig' => '5',
            'provincia_id' => '113'
        ]);
        District::create([
            'name_distrito' => 'Laredo',
            'cod_ubig' => '6',
            'provincia_id' => '113'
        ]);
        District::create([
            'name_distrito' => 'Moche',
            'cod_ubig' => '7',
            'provincia_id' => '113'
        ]);
        District::create([
            'name_distrito' => 'Poroto',
            'cod_ubig' => '8',
            'provincia_id' => '113'
        ]);
        District::create([
            'name_distrito' => 'Salaverry',
            'cod_ubig' => '9',
            'provincia_id' => '113'
        ]);
        District::create([
            'name_distrito' => 'Simbal',
            'cod_ubig' => '10',
            'provincia_id' => '113'
        ]);
        District::create([
            'name_distrito' => 'Victor Larco Herrera',
            'cod_ubig' => '11',
            'provincia_id' => '113'
        ]);


        District::create([
            'name_distrito' => 'Ascope',
            'cod_ubig' => '1',
            'provincia_id' => '114'
        ]);
        District::create([
            'name_distrito' => 'Chicama',
            'cod_ubig' => '2',
            'provincia_id' => '114'
        ]);
        District::create([
            'name_distrito' => 'Chocope',
            'cod_ubig' => '3',
            'provincia_id' => '114'
        ]);
        District::create([
            'name_distrito' => 'Magdalena de Cao',
            'cod_ubig' => '4',
            'provincia_id' => '114'
        ]);
        District::create([
            'name_distrito' => 'Paijan',
            'cod_ubig' => '5',
            'provincia_id' => '114'
        ]);
        District::create([
            'name_distrito' => 'Rázuri',
            'cod_ubig' => '6',
            'provincia_id' => '114'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Cao',
            'cod_ubig' => '7',
            'provincia_id' => '114'
        ]);
        District::create([
            'name_distrito' => 'Casa Grande',
            'cod_ubig' => '8',
            'provincia_id' => '114'
        ]);



        District::create([
            'name_distrito' => 'Bolívar',
            'cod_ubig' => '1',
            'provincia_id' => '115'
        ]);
        District::create([
            'name_distrito' => 'Bambamarca',
            'cod_ubig' => '2',
            'provincia_id' => '115'
        ]);
        District::create([
            'name_distrito' => 'Condormarca',
            'cod_ubig' => '3',
            'provincia_id' => '115'
        ]);
        District::create([
            'name_distrito' => 'Longotea',
            'cod_ubig' => '4',
            'provincia_id' => '115'
        ]);
        District::create([
            'name_distrito' => 'Uchumarca',
            'cod_ubig' => '5',
            'provincia_id' => '115'
        ]);
        District::create([
            'name_distrito' => 'Ucuncha',
            'cod_ubig' => '6',
            'provincia_id' => '115'
        ]);


        District::create([
            'name_distrito' => 'Chepen',
            'cod_ubig' => '1',
            'provincia_id' => '116'
        ]);
        District::create([
            'name_distrito' => 'Pacanga',
            'cod_ubig' => '2',
            'provincia_id' => '116'
        ]);
        District::create([
            'name_distrito' => 'Pueblo Nuevo',
            'cod_ubig' => '3',
            'provincia_id' => '116'
        ]);



        District::create([
            'name_distrito' => 'Julcan',
            'cod_ubig' => '1',
            'provincia_id' => '117'
        ]);
        District::create([
            'name_distrito' => 'Calamarca',
            'cod_ubig' => '2',
            'provincia_id' => '117'
        ]);
        District::create([
            'name_distrito' => 'Carabamba',
            'cod_ubig' => '3',
            'provincia_id' => '117'
        ]);
        District::create([
            'name_distrito' => 'Huaso',
            'cod_ubig' => '4',
            'provincia_id' => '117'
        ]);


        District::create([
            'name_distrito' => 'Otuzco',
            'cod_ubig' => '1',
            'provincia_id' => '118'
        ]);
        District::create([
            'name_distrito' => 'Agallpampa',
            'cod_ubig' => '2',
            'provincia_id' => '118'
        ]);
        District::create([
            'name_distrito' => 'Charat',
            'cod_ubig' => '4',
            'provincia_id' => '118'
        ]);
        District::create([
            'name_distrito' => 'Huaranchal',
            'cod_ubig' => '5',
            'provincia_id' => '118'
        ]);
        District::create([
            'name_distrito' => 'La Cuesta',
            'cod_ubig' => '6',
            'provincia_id' => '118'
        ]);
        District::create([
            'name_distrito' => 'Mache',
            'cod_ubig' => '8',
            'provincia_id' => '118'
        ]);
        District::create([
            'name_distrito' => 'Paranday',
            'cod_ubig' => '10',
            'provincia_id' => '118'
        ]);
        District::create([
            'name_distrito' => 'Salpo',
            'cod_ubig' => '11',
            'provincia_id' => '118'
        ]);
        District::create([
            'name_distrito' => 'Sinsicap',
            'cod_ubig' => '13',
            'provincia_id' => '118'
        ]);
        District::create([
            'name_distrito' => 'Usquil',
            'cod_ubig' => '14',
            'provincia_id' => '118'
        ]);



        District::create([
            'name_distrito' => 'San Pedro de Lloc',
            'cod_ubig' => '1',
            'provincia_id' => '119'
        ]);
        District::create([
            'name_distrito' => 'Guadalupe',
            'cod_ubig' => '2',
            'provincia_id' => '119'
        ]);
        District::create([
            'name_distrito' => 'Jequetepeque',
            'cod_ubig' => '3',
            'provincia_id' => '119'
        ]);
        District::create([
            'name_distrito' => 'Pacasmayo',
            'cod_ubig' => '4',
            'provincia_id' => '119'
        ]);
        District::create([
            'name_distrito' => 'San José',
            'cod_ubig' => '5',
            'provincia_id' => '119'
        ]);


        District::create([
            'name_distrito' => 'Tayabamba',
            'cod_ubig' => '1',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Buldibuyo',
            'cod_ubig' => '2',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Chillia',
            'cod_ubig' => '3',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Huancaspata',
            'cod_ubig' => '4',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Huaylillas',
            'cod_ubig' => '5',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Huayo',
            'cod_ubig' => '6',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Ongon',
            'cod_ubig' => '7',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Parcoy',
            'cod_ubig' => '8',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Pataz',
            'cod_ubig' => '9',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Pias',
            'cod_ubig' => '10',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Challas',
            'cod_ubig' => '11',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Taurija',
            'cod_ubig' => '12',
            'provincia_id' => '120'
        ]);
        District::create([
            'name_distrito' => 'Urpay',
            'cod_ubig' => '13',
            'provincia_id' => '120'
        ]);



        District::create([
            'name_distrito' => 'Huamachuco',
            'cod_ubig' => '1',
            'provincia_id' => '121'
        ]);
        District::create([
            'name_distrito' => 'Chugay',
            'cod_ubig' => '2',
            'provincia_id' => '121'
        ]);
        District::create([
            'name_distrito' => 'Cochorco',
            'cod_ubig' => '3',
            'provincia_id' => '121'
        ]);
        District::create([
            'name_distrito' => 'Curgos',
            'cod_ubig' => '4',
            'provincia_id' => '121'
        ]);
        District::create([
            'name_distrito' => 'Marcabal',
            'cod_ubig' => '5',
            'provincia_id' => '121'
        ]);
        District::create([
            'name_distrito' => 'Sanagoran',
            'cod_ubig' => '6',
            'provincia_id' => '121'
        ]);
        District::create([
            'name_distrito' => 'Sarin',
            'cod_ubig' => '7',
            'provincia_id' => '121'
        ]);
        District::create([
            'name_distrito' => 'Sartimbamba',
            'cod_ubig' => '8',
            'provincia_id' => '121'
        ]);


        District::create([
            'name_distrito' => 'Santiago de Chuco',
            'cod_ubig' => '1',
            'provincia_id' => '122'
        ]);
        District::create([
            'name_distrito' => 'Angasmarca',
            'cod_ubig' => '2',
            'provincia_id' => '122'
        ]);
        District::create([
            'name_distrito' => 'Cachicadan',
            'cod_ubig' => '3',
            'provincia_id' => '122'
        ]);
        District::create([
            'name_distrito' => 'Mollebamba',
            'cod_ubig' => '4',
            'provincia_id' => '122'
        ]);
        District::create([
            'name_distrito' => 'Mollepata',
            'cod_ubig' => '5',
            'provincia_id' => '122'
        ]);
        District::create([
            'name_distrito' => 'Quiruvilca',
            'cod_ubig' => '6',
            'provincia_id' => '122'
        ]);
        District::create([
            'name_distrito' => 'Santa Cruz de Chuca',
            'cod_ubig' => '7',
            'provincia_id' => '122'
        ]);
        District::create([
            'name_distrito' => 'Sitabamba',
            'cod_ubig' => '8',
            'provincia_id' => '122'
        ]);


        District::create([
            'name_distrito' => 'Cascas',
            'cod_ubig' => '1',
            'provincia_id' => '123'
        ]);
        District::create([
            'name_distrito' => 'Lucma',
            'cod_ubig' => '2',
            'provincia_id' => '123'
        ]);
        District::create([
            'name_distrito' => 'Marmot',
            'cod_ubig' => '3',
            'provincia_id' => '123'
        ]);
        District::create([
            'name_distrito' => 'Sayapullo',
            'cod_ubig' => '4',
            'provincia_id' => '123'
        ]);



        District::create([
            'name_distrito' => 'Viru',
            'cod_ubig' => '1',
            'provincia_id' => '124'
        ]);
        District::create([
            'name_distrito' => 'Chao',
            'cod_ubig' => '2',
            'provincia_id' => '124'
        ]);
        District::create([
            'name_distrito' => 'Guadalupito',
            'cod_ubig' => '3',
            'provincia_id' => '124'
        ]);


        District::create([
            'name_distrito' => 'Chiclayo',
            'cod_ubig' => '1',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Chongoyape',
            'cod_ubig' => '2',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Eten',
            'cod_ubig' => '3',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Eten Puerto',
            'cod_ubig' => '4',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'José Leonardo Ortiz',
            'cod_ubig' => '5',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'La Victoria',
            'cod_ubig' => '6',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Lagunas',
            'cod_ubig' => '7',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Monsefu',
            'cod_ubig' => '8',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Nueva Arica',
            'cod_ubig' => '9',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Oyotun',
            'cod_ubig' => '10',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Picsi',
            'cod_ubig' => '11',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Pimentel',
            'cod_ubig' => '12',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Reque',
            'cod_ubig' => '13',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa',
            'cod_ubig' => '14',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Saña',
            'cod_ubig' => '15',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Cayalti',
            'cod_ubig' => '16',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Patapo',
            'cod_ubig' => '17',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Pomalca',
            'cod_ubig' => '18',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Pucala',
            'cod_ubig' => '19',
            'provincia_id' => '125'
        ]);
        District::create([
            'name_distrito' => 'Tuman',
            'cod_ubig' => '20',
            'provincia_id' => '125'
        ]);



        District::create([
            'name_distrito' => 'Ferreñafe',
            'cod_ubig' => '1',
            'provincia_id' => '126'
        ]);
        District::create([
            'name_distrito' => 'Cañaris',
            'cod_ubig' => '2',
            'provincia_id' => '126'
        ]);
        District::create([
            'name_distrito' => 'Incahuasi',
            'cod_ubig' => '3',
            'provincia_id' => '126'
        ]);
        District::create([
            'name_distrito' => 'Manuel Antonio Mesones Muro',
            'cod_ubig' => '4',
            'provincia_id' => '126'
        ]);
        District::create([
            'name_distrito' => 'Pitipo',
            'cod_ubig' => '5',
            'provincia_id' => '126'
        ]);
        District::create([
            'name_distrito' => 'Pueblo Nuevo',
            'cod_ubig' => '6',
            'provincia_id' => '126'
        ]);


        District::create([
            'name_distrito' => 'Lambayeque',
            'cod_ubig' => '1',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'Chochope',
            'cod_ubig' => '2',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'Illimo',
            'cod_ubig' => '3',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'Jayanca',
            'cod_ubig' => '4',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'Mochumi',
            'cod_ubig' => '5',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'Morrope',
            'cod_ubig' => '6',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'Motupe',
            'cod_ubig' => '7',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'Olmos',
            'cod_ubig' => '8',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'Pacora',
            'cod_ubig' => '9',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'Salas',
            'cod_ubig' => '10',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'San José',
            'cod_ubig' => '11',
            'provincia_id' => '127'
        ]);
        District::create([
            'name_distrito' => 'Tucume',
            'cod_ubig' => '12',
            'provincia_id' => '127'
        ]);


        District::create([
            'name_distrito' => 'Lima',
            'cod_ubig' => '1',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Ancón',
            'cod_ubig' => '2',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Ate',
            'cod_ubig' => '3',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Barranco',
            'cod_ubig' => '4',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Breña',
            'cod_ubig' => '5',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Carabayllo',
            'cod_ubig' => '6',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Chaclacayo',
            'cod_ubig' => '7',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Chorrillos',
            'cod_ubig' => '8',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Cieneguilla',
            'cod_ubig' => '9',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Comas',
            'cod_ubig' => '10',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'El Agustino',
            'cod_ubig' => '11',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Independencia',
            'cod_ubig' => '12',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Jesús María',
            'cod_ubig' => '13',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'La Molina',
            'cod_ubig' => '14',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'La Victoria',
            'cod_ubig' => '15',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Lince',
            'cod_ubig' => '16',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Los Olivos',
            'cod_ubig' => '17',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Lurigancho',
            'cod_ubig' => '18',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Lurin',
            'cod_ubig' => '19',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Magdalena del Mar',
            'cod_ubig' => '20',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Pueblo Libre',
            'cod_ubig' => '21',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Miraflores',
            'cod_ubig' => '22',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Pachacamac',
            'cod_ubig' => '23',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Pucusana',
            'cod_ubig' => '24',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Puente Piedra',
            'cod_ubig' => '25',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Punta Hermosa',
            'cod_ubig' => '26',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Punta Negra',
            'cod_ubig' => '27',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Rímac',
            'cod_ubig' => '28',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'San Bartolo',
            'cod_ubig' => '29',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'San Borja',
            'cod_ubig' => '30',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'San Isidro',
            'cod_ubig' => '31',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Lurigancho',
            'cod_ubig' => '32',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Miraflores',
            'cod_ubig' => '33',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'San Luis',
            'cod_ubig' => '34',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'San Martín de Porres',
            'cod_ubig' => '35',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'San Miguel',
            'cod_ubig' => '36',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Santa Anita',
            'cod_ubig' => '37',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Santa María del Mar',
            'cod_ubig' => '38',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa',
            'cod_ubig' => '39',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Surco',
            'cod_ubig' => '40',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Surquillo',
            'cod_ubig' => '41',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Villa El Salvador',
            'cod_ubig' => '42',
            'provincia_id' => '128'
        ]);
        District::create([
            'name_distrito' => 'Villa María del Triunfo',
            'cod_ubig' => '43',
            'provincia_id' => '128'
        ]);



        District::create([
            'name_distrito' => 'Barranca',
            'cod_ubig' => '1',
            'provincia_id' => '129'
        ]);
        District::create([
            'name_distrito' => 'Paramonga',
            'cod_ubig' => '2',
            'provincia_id' => '129'
        ]);
        District::create([
            'name_distrito' => 'Pativilca',
            'cod_ubig' => '3',
            'provincia_id' => '129'
        ]);
        District::create([
            'name_distrito' => 'Supe',
            'cod_ubig' => '4',
            'provincia_id' => '129'
        ]);
        District::create([
            'name_distrito' => 'Supe Puerto',
            'cod_ubig' => '5',
            'provincia_id' => '129'
        ]);


        District::create([
            'name_distrito' => 'Cajatambo',
            'cod_ubig' => '1',
            'provincia_id' => '130'
        ]);
        District::create([
            'name_distrito' => 'Copa',
            'cod_ubig' => '2',
            'provincia_id' => '130'
        ]);
        District::create([
            'name_distrito' => 'Gorgor',
            'cod_ubig' => '3',
            'provincia_id' => '130'
        ]);
        District::create([
            'name_distrito' => 'Huancapon',
            'cod_ubig' => '4',
            'provincia_id' => '130'
        ]);
        District::create([
            'name_distrito' => 'Manas',
            'cod_ubig' => '5',
            'provincia_id' => '130'
        ]);


        District::create([
            'name_distrito' => 'Canta',
            'cod_ubig' => '1',
            'provincia_id' => '131'
        ]);
        District::create([
            'name_distrito' => 'Arahuay',
            'cod_ubig' => '2',
            'provincia_id' => '131'
        ]);
        District::create([
            'name_distrito' => 'Huamantanga',
            'cod_ubig' => '3',
            'provincia_id' => '131'
        ]);
        District::create([
            'name_distrito' => 'Huaros',
            'cod_ubig' => '4',
            'provincia_id' => '131'
        ]);
        District::create([
            'name_distrito' => 'Lachaqui',
            'cod_ubig' => '5',
            'provincia_id' => '131'
        ]);
        District::create([
            'name_distrito' => 'San Buenaventura',
            'cod_ubig' => '6',
            'provincia_id' => '131'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa de Quives',
            'cod_ubig' => '7',
            'provincia_id' => '131'
        ]);


        District::create([
            'name_distrito' => 'San Vicente de Cañete',
            'cod_ubig' => '1',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Asia',
            'cod_ubig' => '2',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Calango',
            'cod_ubig' => '3',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Cerro Azul',
            'cod_ubig' => '4',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Chilca',
            'cod_ubig' => '5',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Coayllo',
            'cod_ubig' => '6',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Imperial',
            'cod_ubig' => '7',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Lunahuana',
            'cod_ubig' => '8',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Mala',
            'cod_ubig' => '9',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Nuevo Imperial',
            'cod_ubig' => '10',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Pacaran',
            'cod_ubig' => '11',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Quilmana',
            'cod_ubig' => '12',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'San Antonio',
            'cod_ubig' => '13',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'San Luis',
            'cod_ubig' => '14',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Santa Cruz de Flores',
            'cod_ubig' => '15',
            'provincia_id' => '132'
        ]);
        District::create([
            'name_distrito' => 'Zúñiga',
            'cod_ubig' => '16',
            'provincia_id' => '132'
        ]);



        District::create([
            'name_distrito' => 'Huaral',
            'cod_ubig' => '1',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'Atavillos Alto',
            'cod_ubig' => '2',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'Atavillos Bajo',
            'cod_ubig' => '3',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'Aucallama',
            'cod_ubig' => '4',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'Chancay',
            'cod_ubig' => '5',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'Ihuari',
            'cod_ubig' => '6',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'Lampian',
            'cod_ubig' => '7',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'Pacaraos',
            'cod_ubig' => '8',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'San Miguel de Acos',
            'cod_ubig' => '9',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'Santa Cruz de Andamarca',
            'cod_ubig' => '10',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'Sumbilca',
            'cod_ubig' => '11',
            'provincia_id' => '133'
        ]);
        District::create([
            'name_distrito' => 'Veintisiete de Noviembre',
            'cod_ubig' => '12',
            'provincia_id' => '133'
        ]);


        District::create([
            'name_distrito' => 'Matucana',
            'cod_ubig' => '1',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Antioquia',
            'cod_ubig' => '2',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Callahuanca',
            'cod_ubig' => '3',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Carampoma',
            'cod_ubig' => '4',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Chicla',
            'cod_ubig' => '5',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Cuenca',
            'cod_ubig' => '6',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Huachupampa',
            'cod_ubig' => '7',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Huanza',
            'cod_ubig' => '8',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Huarochiri',
            'cod_ubig' => '9',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Lahuaytambo',
            'cod_ubig' => '10',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Langa',
            'cod_ubig' => '11',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Laraos',
            'cod_ubig' => '12',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Mariatana',
            'cod_ubig' => '13',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Ricardo Palma',
            'cod_ubig' => '14',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Andrés de Tupicocha',
            'cod_ubig' => '15',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Antonio',
            'cod_ubig' => '16',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Bartolomé',
            'cod_ubig' => '17',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Damian',
            'cod_ubig' => '18',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Iris',
            'cod_ubig' => '19',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Tantaranche',
            'cod_ubig' => '20',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Lorenzo de Quinti',
            'cod_ubig' => '21',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Mateo',
            'cod_ubig' => '22',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Mateo de Otao',
            'cod_ubig' => '23',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Casta',
            'cod_ubig' => '24',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Huancayre',
            'cod_ubig' => '25',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Sangallaya',
            'cod_ubig' => '26',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Santa Cruz de Cocachacra',
            'cod_ubig' => '27',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Santa Eulalia',
            'cod_ubig' => '28',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Anchucaya',
            'cod_ubig' => '29',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Tuna',
            'cod_ubig' => '30',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Santo Domingo de Los Olleros',
            'cod_ubig' => '31',
            'provincia_id' => '134'
        ]);
        District::create([
            'name_distrito' => 'Surco',
            'cod_ubig' => '32',
            'provincia_id' => '134'
        ]);



        District::create([
            'name_distrito' => 'Huacho',
            'cod_ubig' => '1',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Ambar',
            'cod_ubig' => '2',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Caleta de Carquin',
            'cod_ubig' => '3',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Checras',
            'cod_ubig' => '4',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Hualmay',
            'cod_ubig' => '5',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Huaura',
            'cod_ubig' => '6',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Leoncio Prado',
            'cod_ubig' => '7',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Paccho',
            'cod_ubig' => '8',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Santa Leonor',
            'cod_ubig' => '9',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Santa María',
            'cod_ubig' => '10',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Sayan',
            'cod_ubig' => '11',
            'provincia_id' => '135'
        ]);
        District::create([
            'name_distrito' => 'Vegueta',
            'cod_ubig' => '12',
            'provincia_id' => '135'
        ]);



        District::create([
            'name_distrito' => 'Oyon',
            'cod_ubig' => '1',
            'provincia_id' => '136'
        ]);
        District::create([
            'name_distrito' => 'Andajes',
            'cod_ubig' => '2',
            'provincia_id' => '136'
        ]);
        District::create([
            'name_distrito' => 'Caujul',
            'cod_ubig' => '3',
            'provincia_id' => '136'
        ]);
        District::create([
            'name_distrito' => 'Cochamarca',
            'cod_ubig' => '4',
            'provincia_id' => '136'
        ]);
        District::create([
            'name_distrito' => 'Navan',
            'cod_ubig' => '5',
            'provincia_id' => '136'
        ]);
        District::create([
            'name_distrito' => 'Pachangara',
            'cod_ubig' => '6',
            'provincia_id' => '136'
        ]);



        District::create([
            'name_distrito' => 'Yauyos',
            'cod_ubig' => '1',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Alis',
            'cod_ubig' => '2',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Allauca',
            'cod_ubig' => '3',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Ayaviri',
            'cod_ubig' => '4',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Azángaro',
            'cod_ubig' => '5',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Cacra',
            'cod_ubig' => '6',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Carania',
            'cod_ubig' => '7',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Catahuasi',
            'cod_ubig' => '8',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Chocos',
            'cod_ubig' => '9',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Cochas',
            'cod_ubig' => '10',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Colonia',
            'cod_ubig' => '11',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Hongos',
            'cod_ubig' => '12',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Huampara',
            'cod_ubig' => '13',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Huancaya',
            'cod_ubig' => '14',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Huangascar',
            'cod_ubig' => '15',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Huantan',
            'cod_ubig' => '16',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Huañec',
            'cod_ubig' => '17',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Laraos',
            'cod_ubig' => '18',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Lincha',
            'cod_ubig' => '19',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Madean',
            'cod_ubig' => '20',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Miraflores',
            'cod_ubig' => '21',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Omas',
            'cod_ubig' => '22',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Putinza',
            'cod_ubig' => '23',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Quinches',
            'cod_ubig' => '24',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Quinocay',
            'cod_ubig' => '25',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'San Joaquín',
            'cod_ubig' => '26',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Pilas',
            'cod_ubig' => '27',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Tanta',
            'cod_ubig' => '28',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Tauripampa',
            'cod_ubig' => '29',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Tomas',
            'cod_ubig' => '30',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Tupe',
            'cod_ubig' => '31',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Viñac',
            'cod_ubig' => '32',
            'provincia_id' => '137'
        ]);
        District::create([
            'name_distrito' => 'Vitis',
            'cod_ubig' => '33',
            'provincia_id' => '137'
        ]);



        District::create([
            'name_distrito' => 'Iquitos',
            'cod_ubig' => '1',
            'provincia_id' => '138'
        ]);
        District::create([
            'name_distrito' => 'Alto Nanay',
            'cod_ubig' => '2',
            'provincia_id' => '138'
        ]);
        District::create([
            'name_distrito' => 'Fernando Lores',
            'cod_ubig' => '3',
            'provincia_id' => '138'
        ]);
        District::create([
            'name_distrito' => 'Indiana',
            'cod_ubig' => '4',
            'provincia_id' => '138'
        ]);
        District::create([
            'name_distrito' => 'Las Amazonas',
            'cod_ubig' => '5',
            'provincia_id' => '138'
        ]);
        District::create([
            'name_distrito' => 'Mazan',
            'cod_ubig' => '6',
            'provincia_id' => '138'
        ]);
        District::create([
            'name_distrito' => 'Napo',
            'cod_ubig' => '7',
            'provincia_id' => '138'
        ]);
        District::create([
            'name_distrito' => 'Punchana',
            'cod_ubig' => '8',
            'provincia_id' => '138'
        ]);
        District::create([
            'name_distrito' => 'Torres Causana',
            'cod_ubig' => '10',
            'provincia_id' => '138'
        ]);
        District::create([
            'name_distrito' => 'Belén',
            'cod_ubig' => '12',
            'provincia_id' => '138'
        ]);
        District::create([
            'name_distrito' => 'San Juan Bautista',
            'cod_ubig' => '13',
            'provincia_id' => '138'
        ]);



        District::create([
            'name_distrito' => 'Yurimaguas',
            'cod_ubig' => '1',
            'provincia_id' => '139'
        ]);
        District::create([
            'name_distrito' => 'Balsapuerto',
            'cod_ubig' => '2',
            'provincia_id' => '139'
        ]);
        District::create([
            'name_distrito' => 'Jeberos',
            'cod_ubig' => '5',
            'provincia_id' => '139'
        ]);
        District::create([
            'name_distrito' => 'Lagunas',
            'cod_ubig' => '6',
            'provincia_id' => '139'
        ]);
        District::create([
            'name_distrito' => 'Santa Cruz',
            'cod_ubig' => '10',
            'provincia_id' => '139'
        ]);
        District::create([
            'name_distrito' => 'Teniente Cesar López Rojas',
            'cod_ubig' => '11',
            'provincia_id' => '139'
        ]);



        District::create([
            'name_distrito' => 'Nauta',
            'cod_ubig' => '1',
            'provincia_id' => '140'
        ]);
        District::create([
            'name_distrito' => 'Parinari',
            'cod_ubig' => '2',
            'provincia_id' => '140'
        ]);
        District::create([
            'name_distrito' => 'Tigre',
            'cod_ubig' => '3',
            'provincia_id' => '140'
        ]);
        District::create([
            'name_distrito' => 'Trompeteros',
            'cod_ubig' => '4',
            'provincia_id' => '140'
        ]);
        District::create([
            'name_distrito' => 'Urarinas',
            'cod_ubig' => '5',
            'provincia_id' => '140'
        ]);



        District::create([
            'name_distrito' => 'Ramón Castilla',
            'cod_ubig' => '1',
            'provincia_id' => '141'
        ]);
        District::create([
            'name_distrito' => 'Pebas',
            'cod_ubig' => '2',
            'provincia_id' => '141'
        ]);
        District::create([
            'name_distrito' => 'Yavari',
            'cod_ubig' => '3',
            'provincia_id' => '141'
        ]);
        District::create([
            'name_distrito' => 'San Pablo',
            'cod_ubig' => '4',
            'provincia_id' => '141'
        ]);


        District::create([
            'name_distrito' => 'Requena',
            'cod_ubig' => '1',
            'provincia_id' => '142'
        ]);
        District::create([
            'name_distrito' => 'Alto Tapiche',
            'cod_ubig' => '2',
            'provincia_id' => '142'
        ]);
        District::create([
            'name_distrito' => 'Capelo',
            'cod_ubig' => '3',
            'provincia_id' => '142'
        ]);
        District::create([
            'name_distrito' => 'Emilio San Martín',
            'cod_ubig' => '4',
            'provincia_id' => '142'
        ]);
        District::create([
            'name_distrito' => 'Maquia',
            'cod_ubig' => '5',
            'provincia_id' => '142'
        ]);
        District::create([
            'name_distrito' => 'Puinahua',
            'cod_ubig' => '6',
            'provincia_id' => '142'
        ]);
        District::create([
            'name_distrito' => 'Saquena',
            'cod_ubig' => '7',
            'provincia_id' => '142'
        ]);
        District::create([
            'name_distrito' => 'Soplin',
            'cod_ubig' => '8',
            'provincia_id' => '142'
        ]);
        District::create([
            'name_distrito' => 'Tapiche',
            'cod_ubig' => '9',
            'provincia_id' => '142'
        ]);
        District::create([
            'name_distrito' => 'Jenaro Herrera',
            'cod_ubig' => '10',
            'provincia_id' => '142'
        ]);
        District::create([
            'name_distrito' => 'Yaquerana',
            'cod_ubig' => '11',
            'provincia_id' => '142'
        ]);



        District::create([
            'name_distrito' => 'Contamana',
            'cod_ubig' => '1',
            'provincia_id' => '143'
        ]);
        District::create([
            'name_distrito' => 'Inahuaya',
            'cod_ubig' => '2',
            'provincia_id' => '143'
        ]);
        District::create([
            'name_distrito' => 'Padre Márquez',
            'cod_ubig' => '3',
            'provincia_id' => '143'
        ]);
        District::create([
            'name_distrito' => 'Pampa Hermosa',
            'cod_ubig' => '4',
            'provincia_id' => '143'
        ]);
        District::create([
            'name_distrito' => 'Sarayacu',
            'cod_ubig' => '5',
            'provincia_id' => '143'
        ]);
        District::create([
            'name_distrito' => 'Vargas Guerra',
            'cod_ubig' => '6',
            'provincia_id' => '143'
        ]);



        District::create([
            'name_distrito' => 'Barranca',
            'cod_ubig' => '1',
            'provincia_id' => '144'
        ]);
        District::create([
            'name_distrito' => 'Cahuapanas',
            'cod_ubig' => '2',
            'provincia_id' => '144'
        ]);
        District::create([
            'name_distrito' => 'Manseriche',
            'cod_ubig' => '3',
            'provincia_id' => '144'
        ]);
        District::create([
            'name_distrito' => 'Morona',
            'cod_ubig' => '4',
            'provincia_id' => '144'
        ]);
        District::create([
            'name_distrito' => 'Pastaza',
            'cod_ubig' => '5',
            'provincia_id' => '144'
        ]);
        District::create([
            'name_distrito' => 'Andoas',
            'cod_ubig' => '6',
            'provincia_id' => '144'
        ]);



        District::create([
            'name_distrito' => 'Putumayo',
            'cod_ubig' => '1',
            'provincia_id' => '145'
        ]);
        District::create([
            'name_distrito' => 'Rosa Panduro',
            'cod_ubig' => '2',
            'provincia_id' => '145'
        ]);
        District::create([
            'name_distrito' => 'Teniente Manuel Clavero',
            'cod_ubig' => '3',
            'provincia_id' => '145'
        ]);
        District::create([
            'name_distrito' => 'Yaguas',
            'cod_ubig' => '4',
            'provincia_id' => '145'
        ]);


        District::create([
            'name_distrito' => 'Tambopata',
            'cod_ubig' => '1',
            'provincia_id' => '146'
        ]);
        District::create([
            'name_distrito' => 'Inambari',
            'cod_ubig' => '2',
            'provincia_id' => '146'
        ]);
        District::create([
            'name_distrito' => 'Las Piedras',
            'cod_ubig' => '3',
            'provincia_id' => '146'
        ]);
        District::create([
            'name_distrito' => 'Laberinto',
            'cod_ubig' => '4',
            'provincia_id' => '146'
        ]);


        District::create([
            'name_distrito' => 'Manu',
            'cod_ubig' => '1',
            'provincia_id' => '147'
        ]);
        District::create([
            'name_distrito' => 'Fitzcarrald',
            'cod_ubig' => '2',
            'provincia_id' => '147'
        ]);
        District::create([
            'name_distrito' => 'Madre de Dios',
            'cod_ubig' => '3',
            'provincia_id' => '147'
        ]);
        District::create([
            'name_distrito' => 'Huepetuhe',
            'cod_ubig' => '4',
            'provincia_id' => '147'
        ]);


        District::create([
            'name_distrito' => 'Iñapari',
            'cod_ubig' => '1',
            'provincia_id' => '148'
        ]);
        District::create([
            'name_distrito' => 'Iberia',
            'cod_ubig' => '2',
            'provincia_id' => '148'
        ]);
        District::create([
            'name_distrito' => 'Tahuamanu',
            'cod_ubig' => '3',
            'provincia_id' => '148'
        ]);


        District::create([
            'name_distrito' => 'Moquegua',
            'cod_ubig' => '1',
            'provincia_id' => '149'
        ]);
        District::create([
            'name_distrito' => 'Carumas',
            'cod_ubig' => '2',
            'provincia_id' => '149'
        ]);
        District::create([
            'name_distrito' => 'Cuchumbaya',
            'cod_ubig' => '3',
            'provincia_id' => '149'
        ]);
        District::create([
            'name_distrito' => 'Samegua',
            'cod_ubig' => '4',
            'provincia_id' => '149'
        ]);
        District::create([
            'name_distrito' => 'San Cristóbal',
            'cod_ubig' => '5',
            'provincia_id' => '149'
        ]);
        District::create([
            'name_distrito' => 'Torata',
            'cod_ubig' => '6',
            'provincia_id' => '149'
        ]);


        District::create([
            'name_distrito' => 'Omate',
            'cod_ubig' => '1',
            'provincia_id' => '150'
        ]);
        District::create([
            'name_distrito' => 'Chojata',
            'cod_ubig' => '2',
            'provincia_id' => '150'
        ]);
        District::create([
            'name_distrito' => 'Coalaque',
            'cod_ubig' => '3',
            'provincia_id' => '150'
        ]);
        District::create([
            'name_distrito' => 'Ichuña',
            'cod_ubig' => '4',
            'provincia_id' => '150'
        ]);
        District::create([
            'name_distrito' => 'La Capilla',
            'cod_ubig' => '5',
            'provincia_id' => '150'
        ]);
        District::create([
            'name_distrito' => 'Lloque',
            'cod_ubig' => '6',
            'provincia_id' => '150'
        ]);
        District::create([
            'name_distrito' => 'Matalaque',
            'cod_ubig' => '7',
            'provincia_id' => '150'
        ]);
        District::create([
            'name_distrito' => 'Puquina',
            'cod_ubig' => '8',
            'provincia_id' => '150'
        ]);
        District::create([
            'name_distrito' => 'Quinistaquillas',
            'cod_ubig' => '9',
            'provincia_id' => '150'
        ]);
        District::create([
            'name_distrito' => 'Ubinas',
            'cod_ubig' => '10',
            'provincia_id' => '150'
        ]);
        District::create([
            'name_distrito' => 'Yunga',
            'cod_ubig' => '11',
            'provincia_id' => '150'
        ]);



        District::create([
            'name_distrito' => 'Ilo',
            'cod_ubig' => '1',
            'provincia_id' => '151'
        ]);
        District::create([
            'name_distrito' => 'El Algarrobal',
            'cod_ubig' => '2',
            'provincia_id' => '151'
        ]);
        District::create([
            'name_distrito' => 'Pacocha',
            'cod_ubig' => '3',
            'provincia_id' => '151'
        ]);


        District::create([
            'name_distrito' => 'Chaupimarca',
            'cod_ubig' => '1',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Huachon',
            'cod_ubig' => '2',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Huariaca',
            'cod_ubig' => '3',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Huayllay',
            'cod_ubig' => '4',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Ninacaca',
            'cod_ubig' => '5',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Pallanchacra',
            'cod_ubig' => '6',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Paucartambo',
            'cod_ubig' => '7',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'San Francisco de Asís de Yarusyacan',
            'cod_ubig' => '8',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Simon Bolívar',
            'cod_ubig' => '9',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Ticlacayan',
            'cod_ubig' => '10',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Tinyahuarco',
            'cod_ubig' => '11',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Vicco',
            'cod_ubig' => '12',
            'provincia_id' => '152'
        ]);
        District::create([
            'name_distrito' => 'Yanacancha',
            'cod_ubig' => '13',
            'provincia_id' => '152'
        ]);


        District::create([
            'name_distrito' => 'Yanahuanca',
            'cod_ubig' => '1',
            'provincia_id' => '153'
        ]);
        District::create([
            'name_distrito' => 'Chacayan',
            'cod_ubig' => '2',
            'provincia_id' => '153'
        ]);
        District::create([
            'name_distrito' => 'Goyllarisquizga',
            'cod_ubig' => '3',
            'provincia_id' => '153'
        ]);
        District::create([
            'name_distrito' => 'Paucar',
            'cod_ubig' => '4',
            'provincia_id' => '153'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Pillao',
            'cod_ubig' => '5',
            'provincia_id' => '153'
        ]);
        District::create([
            'name_distrito' => 'Santa Ana de Tusi',
            'cod_ubig' => '6',
            'provincia_id' => '153'
        ]);
        District::create([
            'name_distrito' => 'Tapuc',
            'cod_ubig' => '7',
            'provincia_id' => '153'
        ]);
        District::create([
            'name_distrito' => 'Vilcabamba',
            'cod_ubig' => '8',
            'provincia_id' => '153'
        ]);


        District::create([
            'name_distrito' => 'Oxapampa',
            'cod_ubig' => '1',
            'provincia_id' => '154'
        ]);
        District::create([
            'name_distrito' => 'Chontabamba',
            'cod_ubig' => '2',
            'provincia_id' => '154'
        ]);
        District::create([
            'name_distrito' => 'Huancabamba',
            'cod_ubig' => '3',
            'provincia_id' => '154'
        ]);
        District::create([
            'name_distrito' => 'Palcazu',
            'cod_ubig' => '4',
            'provincia_id' => '154'
        ]);
        District::create([
            'name_distrito' => 'Pozuzo',
            'cod_ubig' => '5',
            'provincia_id' => '154'
        ]);
        District::create([
            'name_distrito' => 'Puerto Bermúdez',
            'cod_ubig' => '6',
            'provincia_id' => '154'
        ]);
        District::create([
            'name_distrito' => 'Villa Rica',
            'cod_ubig' => '7',
            'provincia_id' => '154'
        ]);
        District::create([
            'name_distrito' => 'Constitución',
            'cod_ubig' => '8',
            'provincia_id' => '154'
        ]);



        District::create([
            'name_distrito' => 'Piura',
            'cod_ubig' => '1',
            'provincia_id' => '155'
        ]);
        District::create([
            'name_distrito' => 'Castilla',
            'cod_ubig' => '4',
            'provincia_id' => '155'
        ]);
        District::create([
            'name_distrito' => 'Catacaos',
            'cod_ubig' => '5',
            'provincia_id' => '155'
        ]);
        District::create([
            'name_distrito' => 'Cura Mori',
            'cod_ubig' => '7',
            'provincia_id' => '155'
        ]);
        District::create([
            'name_distrito' => 'El Tallan',
            'cod_ubig' => '8',
            'provincia_id' => '155'
        ]);
        District::create([
            'name_distrito' => 'La Arena',
            'cod_ubig' => '9',
            'provincia_id' => '155'
        ]);
        District::create([
            'name_distrito' => 'La Unión',
            'cod_ubig' => '10',
            'provincia_id' => '155'
        ]);
        District::create([
            'name_distrito' => 'Las Lomas',
            'cod_ubig' => '11',
            'provincia_id' => '155'
        ]);
        District::create([
            'name_distrito' => 'Tambo Grande',
            'cod_ubig' => '14',
            'provincia_id' => '155'
        ]);
        District::create([
            'name_distrito' => 'Veintiseis de Octubre',
            'cod_ubig' => '15',
            'provincia_id' => '155'
        ]);



        District::create([
            'name_distrito' => 'Ayabaca',
            'cod_ubig' => '1',
            'provincia_id' => '156'
        ]);
        District::create([
            'name_distrito' => 'Frias',
            'cod_ubig' => '2',
            'provincia_id' => '156'
        ]);
        District::create([
            'name_distrito' => 'Jilili',
            'cod_ubig' => '3',
            'provincia_id' => '156'
        ]);
        District::create([
            'name_distrito' => 'Lagunas',
            'cod_ubig' => '4',
            'provincia_id' => '156'
        ]);
        District::create([
            'name_distrito' => 'Montero',
            'cod_ubig' => '5',
            'provincia_id' => '156'
        ]);
        District::create([
            'name_distrito' => 'Pacaipampa',
            'cod_ubig' => '6',
            'provincia_id' => '156'
        ]);
        District::create([
            'name_distrito' => 'Paimas',
            'cod_ubig' => '7',
            'provincia_id' => '156'
        ]);
        District::create([
            'name_distrito' => 'Sapillica',
            'cod_ubig' => '8',
            'provincia_id' => '156'
        ]);
        District::create([
            'name_distrito' => 'Sicchez',
            'cod_ubig' => '9',
            'provincia_id' => '156'
        ]);
        District::create([
            'name_distrito' => 'Suyo',
            'cod_ubig' => '10',
            'provincia_id' => '156'
        ]);



        District::create([
            'name_distrito' => 'Huancabamba',
            'cod_ubig' => '1',
            'provincia_id' => '157'
        ]);
        District::create([
            'name_distrito' => 'Canchaque',
            'cod_ubig' => '2',
            'provincia_id' => '157'
        ]);
        District::create([
            'name_distrito' => 'El Carmen de la Frontera',
            'cod_ubig' => '3',
            'provincia_id' => '157'
        ]);
        District::create([
            'name_distrito' => 'Huarmaca',
            'cod_ubig' => '4',
            'provincia_id' => '157'
        ]);
        District::create([
            'name_distrito' => 'Lalaquiz',
            'cod_ubig' => '5',
            'provincia_id' => '157'
        ]);
        District::create([
            'name_distrito' => 'San Miguel de El Faique',
            'cod_ubig' => '6',
            'provincia_id' => '157'
        ]);
        District::create([
            'name_distrito' => 'Sondor',
            'cod_ubig' => '7',
            'provincia_id' => '157'
        ]);
        District::create([
            'name_distrito' => 'Sondorillo',
            'cod_ubig' => '8',
            'provincia_id' => '157'
        ]);



        District::create([
            'name_distrito' => 'Chulucanas',
            'cod_ubig' => '1',
            'provincia_id' => '158'
        ]);
        District::create([
            'name_distrito' => 'Buenos Aires',
            'cod_ubig' => '2',
            'provincia_id' => '158'
        ]);
        District::create([
            'name_distrito' => 'Chalaco',
            'cod_ubig' => '3',
            'provincia_id' => '158'
        ]);
        District::create([
            'name_distrito' => 'La Matanza',
            'cod_ubig' => '4',
            'provincia_id' => '158'
        ]);
        District::create([
            'name_distrito' => 'Morropon',
            'cod_ubig' => '5',
            'provincia_id' => '158'
        ]);
        District::create([
            'name_distrito' => 'Salitral',
            'cod_ubig' => '6',
            'provincia_id' => '158'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Bigote',
            'cod_ubig' => '7',
            'provincia_id' => '158'
        ]);
        District::create([
            'name_distrito' => 'Santa Catalina de Mossa',
            'cod_ubig' => '8',
            'provincia_id' => '158'
        ]);
        District::create([
            'name_distrito' => 'Santo Domingo',
            'cod_ubig' => '9',
            'provincia_id' => '158'
        ]);
        District::create([
            'name_distrito' => 'Yamango',
            'cod_ubig' => '10',
            'provincia_id' => '158'
        ]);


        District::create([
            'name_distrito' => 'Paita',
            'cod_ubig' => '1',
            'provincia_id' => '159'
        ]);
        District::create([
            'name_distrito' => 'Amotape',
            'cod_ubig' => '2',
            'provincia_id' => '159'
        ]);
        District::create([
            'name_distrito' => 'Arenal',
            'cod_ubig' => '3',
            'provincia_id' => '159'
        ]);
        District::create([
            'name_distrito' => 'Colan',
            'cod_ubig' => '4',
            'provincia_id' => '159'
        ]);
        District::create([
            'name_distrito' => 'La Huaca',
            'cod_ubig' => '5',
            'provincia_id' => '159'
        ]);
        District::create([
            'name_distrito' => 'Tamarindo',
            'cod_ubig' => '6',
            'provincia_id' => '159'
        ]);
        District::create([
            'name_distrito' => 'Vichayal',
            'cod_ubig' => '7',
            'provincia_id' => '159'
        ]);



        District::create([
            'name_distrito' => 'Sullana',
            'cod_ubig' => '1',
            'provincia_id' => '160'
        ]);
        District::create([
            'name_distrito' => 'Bellavista',
            'cod_ubig' => '2',
            'provincia_id' => '160'
        ]);
        District::create([
            'name_distrito' => 'Ignacio Escudero',
            'cod_ubig' => '3',
            'provincia_id' => '160'
        ]);
        District::create([
            'name_distrito' => 'Lancones',
            'cod_ubig' => '4',
            'provincia_id' => '160'
        ]);
        District::create([
            'name_distrito' => 'Marcavelica',
            'cod_ubig' => '5',
            'provincia_id' => '160'
        ]);
        District::create([
            'name_distrito' => 'Miguel Checa',
            'cod_ubig' => '6',
            'provincia_id' => '160'
        ]);
        District::create([
            'name_distrito' => 'Querecotillo',
            'cod_ubig' => '7',
            'provincia_id' => '160'
        ]);
        District::create([
            'name_distrito' => 'Salitral',
            'cod_ubig' => '8',
            'provincia_id' => '160'
        ]);


        District::create([
            'name_distrito' => 'Pariñas',
            'cod_ubig' => '1',
            'provincia_id' => '161'
        ]);
        District::create([
            'name_distrito' => 'El Alto',
            'cod_ubig' => '2',
            'provincia_id' => '161'
        ]);
        District::create([
            'name_distrito' => 'La Brea',
            'cod_ubig' => '3',
            'provincia_id' => '161'
        ]);
        District::create([
            'name_distrito' => 'Lobitos',
            'cod_ubig' => '4',
            'provincia_id' => '161'
        ]);
        District::create([
            'name_distrito' => 'Los Organos',
            'cod_ubig' => '5',
            'provincia_id' => '161'
        ]);
        District::create([
            'name_distrito' => 'Mancora',
            'cod_ubig' => '6',
            'provincia_id' => '161'
        ]);



        District::create([
            'name_distrito' => 'Sechura',
            'cod_ubig' => '1',
            'provincia_id' => '162'
        ]);
        District::create([
            'name_distrito' => 'Bellavista de la Unión',
            'cod_ubig' => '2',
            'provincia_id' => '162'
        ]);
        District::create([
            'name_distrito' => 'Bernal',
            'cod_ubig' => '3',
            'provincia_id' => '162'
        ]);
        District::create([
            'name_distrito' => 'Cristo Nos Valga',
            'cod_ubig' => '4',
            'provincia_id' => '162'
        ]);
        District::create([
            'name_distrito' => 'Vice',
            'cod_ubig' => '5',
            'provincia_id' => '162'
        ]);
        District::create([
            'name_distrito' => 'Rinconada Llicuar',
            'cod_ubig' => '6',
            'provincia_id' => '162'
        ]);


        District::create([
            'name_distrito' => 'Puno',
            'cod_ubig' => '1',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Acora',
            'cod_ubig' => '2',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Amantani',
            'cod_ubig' => '3',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Atuncolla',
            'cod_ubig' => '4',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Capachica',
            'cod_ubig' => '5',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Chucuito',
            'cod_ubig' => '6',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Coata',
            'cod_ubig' => '7',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Huata',
            'cod_ubig' => '8',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Mañazo',
            'cod_ubig' => '9',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Paucarcolla',
            'cod_ubig' => '10',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Pichacani',
            'cod_ubig' => '11',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Plateria',
            'cod_ubig' => '12',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'San Antonio',
            'cod_ubig' => '13',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Tiquillaca',
            'cod_ubig' => '14',
            'provincia_id' => '163'
        ]);
        District::create([
            'name_distrito' => 'Vilque',
            'cod_ubig' => '15',
            'provincia_id' => '163'
        ]);


        District::create([
            'name_distrito' => 'Azángaro',
            'cod_ubig' => '1',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'Achaya',
            'cod_ubig' => '2',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'Arapa',
            'cod_ubig' => '3',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'Asillo',
            'cod_ubig' => '4',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'Caminaca',
            'cod_ubig' => '5',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'Chupa',
            'cod_ubig' => '6',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'José Domingo Choquehuanca',
            'cod_ubig' => '7',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'Muñani',
            'cod_ubig' => '8',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'Potoni',
            'cod_ubig' => '9',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'Saman',
            'cod_ubig' => '10',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'San Anton',
            'cod_ubig' => '11',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'San José',
            'cod_ubig' => '12',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'San Juan de Salinas',
            'cod_ubig' => '13',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'Santiago de Pupuja',
            'cod_ubig' => '14',
            'provincia_id' => '164'
        ]);
        District::create([
            'name_distrito' => 'Tirapata',
            'cod_ubig' => '15',
            'provincia_id' => '164'
        ]);


        District::create([
            'name_distrito' => 'Macusani',
            'cod_ubig' => '1',
            'provincia_id' => '165'
        ]);
        District::create([
            'name_distrito' => 'Ajoyani',
            'cod_ubig' => '2',
            'provincia_id' => '165'
        ]);
        District::create([
            'name_distrito' => 'Ayapata',
            'cod_ubig' => '3',
            'provincia_id' => '165'
        ]);
        District::create([
            'name_distrito' => 'Coasa',
            'cod_ubig' => '4',
            'provincia_id' => '165'
        ]);
        District::create([
            'name_distrito' => 'Corani',
            'cod_ubig' => '5',
            'provincia_id' => '165'
        ]);
        District::create([
            'name_distrito' => 'Crucero',
            'cod_ubig' => '6',
            'provincia_id' => '165'
        ]);
        District::create([
            'name_distrito' => 'Ituata',
            'cod_ubig' => '7',
            'provincia_id' => '165'
        ]);
        District::create([
            'name_distrito' => 'Ollachea',
            'cod_ubig' => '8',
            'provincia_id' => '165'
        ]);
        District::create([
            'name_distrito' => 'San Gaban',
            'cod_ubig' => '9',
            'provincia_id' => '165'
        ]);
        District::create([
            'name_distrito' => 'Usicayos',
            'cod_ubig' => '10',
            'provincia_id' => '165'
        ]);



        District::create([
            'name_distrito' => 'Juli',
            'cod_ubig' => '1',
            'provincia_id' => '166'
        ]);
        District::create([
            'name_distrito' => 'Desaguadero',
            'cod_ubig' => '2',
            'provincia_id' => '166'
        ]);
        District::create([
            'name_distrito' => 'Huacullani',
            'cod_ubig' => '3',
            'provincia_id' => '166'
        ]);
        District::create([
            'name_distrito' => 'Kelluyo',
            'cod_ubig' => '4',
            'provincia_id' => '166'
        ]);
        District::create([
            'name_distrito' => 'Pisacoma',
            'cod_ubig' => '5',
            'provincia_id' => '166'
        ]);
        District::create([
            'name_distrito' => 'Pomata',
            'cod_ubig' => '6',
            'provincia_id' => '166'
        ]);
        District::create([
            'name_distrito' => 'Zepita',
            'cod_ubig' => '7',
            'provincia_id' => '166'
        ]);


        District::create([
            'name_distrito' => 'Ilave',
            'cod_ubig' => '1',
            'provincia_id' => '167'
        ]);
        District::create([
            'name_distrito' => 'Capazo',
            'cod_ubig' => '2',
            'provincia_id' => '167'
        ]);
        District::create([
            'name_distrito' => 'Pilcuyo',
            'cod_ubig' => '3',
            'provincia_id' => '167'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa',
            'cod_ubig' => '4',
            'provincia_id' => '167'
        ]);
        District::create([
            'name_distrito' => 'Conduriri',
            'cod_ubig' => '5',
            'provincia_id' => '167'
        ]);



        District::create([
            'name_distrito' => 'Huancane',
            'cod_ubig' => '1',
            'provincia_id' => '168'
        ]);
        District::create([
            'name_distrito' => 'Cojata',
            'cod_ubig' => '2',
            'provincia_id' => '168'
        ]);
        District::create([
            'name_distrito' => 'Huatasani',
            'cod_ubig' => '3',
            'provincia_id' => '168'
        ]);
        District::create([
            'name_distrito' => 'Inchupalla',
            'cod_ubig' => '4',
            'provincia_id' => '168'
        ]);
        District::create([
            'name_distrito' => 'Pusi',
            'cod_ubig' => '5',
            'provincia_id' => '168'
        ]);
        District::create([
            'name_distrito' => 'Rosaspata',
            'cod_ubig' => '6',
            'provincia_id' => '168'
        ]);
        District::create([
            'name_distrito' => 'Taraco',
            'cod_ubig' => '7',
            'provincia_id' => '168'
        ]);
        District::create([
            'name_distrito' => 'Vilque Chico',
            'cod_ubig' => '8',
            'provincia_id' => '168'
        ]);


        District::create([
            'name_distrito' => 'Lampa',
            'cod_ubig' => '1',
            'provincia_id' => '169'
        ]);
        District::create([
            'name_distrito' => 'Cabanilla',
            'cod_ubig' => '2',
            'provincia_id' => '169'
        ]);
        District::create([
            'name_distrito' => 'Calapuja',
            'cod_ubig' => '3',
            'provincia_id' => '169'
        ]);
        District::create([
            'name_distrito' => 'Nicasio',
            'cod_ubig' => '4',
            'provincia_id' => '169'
        ]);
        District::create([
            'name_distrito' => 'Ocuviri',
            'cod_ubig' => '5',
            'provincia_id' => '169'
        ]);
        District::create([
            'name_distrito' => 'Palca',
            'cod_ubig' => '6',
            'provincia_id' => '169'
        ]);
        District::create([
            'name_distrito' => 'Paratia',
            'cod_ubig' => '7',
            'provincia_id' => '169'
        ]);
        District::create([
            'name_distrito' => 'Pucara',
            'cod_ubig' => '8',
            'provincia_id' => '169'
        ]);
        District::create([
            'name_distrito' => 'Santa Lucia',
            'cod_ubig' => '9',
            'provincia_id' => '169'
        ]);
        District::create([
            'name_distrito' => 'Vilavila',
            'cod_ubig' => '10',
            'provincia_id' => '169'
        ]);


        District::create([
            'name_distrito' => 'Ayaviri',
            'cod_ubig' => '1',
            'provincia_id' => '170'
        ]);
        District::create([
            'name_distrito' => 'Antauta',
            'cod_ubig' => '2',
            'provincia_id' => '170'
        ]);
        District::create([
            'name_distrito' => 'Cupi',
            'cod_ubig' => '3',
            'provincia_id' => '170'
        ]);
        District::create([
            'name_distrito' => 'Llalli',
            'cod_ubig' => '4',
            'provincia_id' => '170'
        ]);
        District::create([
            'name_distrito' => 'Macari',
            'cod_ubig' => '5',
            'provincia_id' => '170'
        ]);
        District::create([
            'name_distrito' => 'Nuñoa',
            'cod_ubig' => '6',
            'provincia_id' => '170'
        ]);
        District::create([
            'name_distrito' => 'Orurillo',
            'cod_ubig' => '7',
            'provincia_id' => '170'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa',
            'cod_ubig' => '8',
            'provincia_id' => '170'
        ]);
        District::create([
            'name_distrito' => 'Umachiri',
            'cod_ubig' => '9',
            'provincia_id' => '170'
        ]);



        District::create([
            'name_distrito' => 'Moho',
            'cod_ubig' => '1',
            'provincia_id' => '171'
        ]);
        District::create([
            'name_distrito' => 'Conima',
            'cod_ubig' => '2',
            'provincia_id' => '171'
        ]);
        District::create([
            'name_distrito' => 'Huayrapata',
            'cod_ubig' => '3',
            'provincia_id' => '171'
        ]);
        District::create([
            'name_distrito' => 'Tilali',
            'cod_ubig' => '4',
            'provincia_id' => '171'
        ]);


        District::create([
            'name_distrito' => 'Putina',
            'cod_ubig' => '1',
            'provincia_id' => '172'
        ]);
        District::create([
            'name_distrito' => 'Ananea',
            'cod_ubig' => '2',
            'provincia_id' => '172'
        ]);
        District::create([
            'name_distrito' => 'Pedro Vilca Apaza',
            'cod_ubig' => '3',
            'provincia_id' => '172'
        ]);
        District::create([
            'name_distrito' => 'Quilcapuncu',
            'cod_ubig' => '4',
            'provincia_id' => '172'
        ]);
        District::create([
            'name_distrito' => 'Sina',
            'cod_ubig' => '5',
            'provincia_id' => '172'
        ]);


        District::create([
            'name_distrito' => 'Juliaca',
            'cod_ubig' => '1',
            'provincia_id' => '173'
        ]);
        District::create([
            'name_distrito' => 'Cabana',
            'cod_ubig' => '2',
            'provincia_id' => '173'
        ]);
        District::create([
            'name_distrito' => 'Cabanillas',
            'cod_ubig' => '3',
            'provincia_id' => '173'
        ]);
        District::create([
            'name_distrito' => 'Caracoto',
            'cod_ubig' => '4',
            'provincia_id' => '173'
        ]);
        District::create([
            'name_distrito' => 'San Miguel',
            'cod_ubig' => '5',
            'provincia_id' => '173'
        ]);



        District::create([
            'name_distrito' => 'Sandia',
            'cod_ubig' => '1',
            'provincia_id' => '174'
        ]);
        District::create([
            'name_distrito' => 'Cuyocuyo',
            'cod_ubig' => '2',
            'provincia_id' => '174'
        ]);
        District::create([
            'name_distrito' => 'Limbani',
            'cod_ubig' => '3',
            'provincia_id' => '174'
        ]);
        District::create([
            'name_distrito' => 'Patambuco',
            'cod_ubig' => '4',
            'provincia_id' => '174'
        ]);
        District::create([
            'name_distrito' => 'Phara',
            'cod_ubig' => '5',
            'provincia_id' => '174'
        ]);
        District::create([
            'name_distrito' => 'Quiaca',
            'cod_ubig' => '6',
            'provincia_id' => '174'
        ]);
        District::create([
            'name_distrito' => 'San Juan del Oro',
            'cod_ubig' => '7',
            'provincia_id' => '174'
        ]);
        District::create([
            'name_distrito' => 'Yanahuaya',
            'cod_ubig' => '8',
            'provincia_id' => '174'
        ]);
        District::create([
            'name_distrito' => 'Alto Inambari',
            'cod_ubig' => '9',
            'provincia_id' => '174'
        ]);
        District::create([
            'name_distrito' => 'San Pedro de Putina Punco',
            'cod_ubig' => '10',
            'provincia_id' => '174'
        ]);



        District::create([
            'name_distrito' => 'Yunguyo',
            'cod_ubig' => '1',
            'provincia_id' => '175'
        ]);
        District::create([
            'name_distrito' => 'Anapia',
            'cod_ubig' => '2',
            'provincia_id' => '175'
        ]);
        District::create([
            'name_distrito' => 'Copani',
            'cod_ubig' => '3',
            'provincia_id' => '175'
        ]);
        District::create([
            'name_distrito' => 'Cuturapi',
            'cod_ubig' => '4',
            'provincia_id' => '175'
        ]);
        District::create([
            'name_distrito' => 'Ollaraya',
            'cod_ubig' => '5',
            'provincia_id' => '175'
        ]);
        District::create([
            'name_distrito' => 'Tinicachi',
            'cod_ubig' => '6',
            'provincia_id' => '175'
        ]);
        District::create([
            'name_distrito' => 'Unicachi',
            'cod_ubig' => '7',
            'provincia_id' => '175'
        ]);



        District::create([
            'name_distrito' => 'Moyobamba',
            'cod_ubig' => '1',
            'provincia_id' => '176'
        ]);
        District::create([
            'name_distrito' => 'Calzada',
            'cod_ubig' => '2',
            'provincia_id' => '176'
        ]);
        District::create([
            'name_distrito' => 'Habana',
            'cod_ubig' => '3',
            'provincia_id' => '176'
        ]);
        District::create([
            'name_distrito' => 'Jepelacio',
            'cod_ubig' => '4',
            'provincia_id' => '176'
        ]);
        District::create([
            'name_distrito' => 'Soritor',
            'cod_ubig' => '5',
            'provincia_id' => '176'
        ]);
        District::create([
            'name_distrito' => 'Yantalo',
            'cod_ubig' => '6',
            'provincia_id' => '176'
        ]);



        District::create([
            'name_distrito' => 'Bellavista',
            'cod_ubig' => '1',
            'provincia_id' => '177'
        ]);
        District::create([
            'name_distrito' => 'Alto Biavo',
            'cod_ubig' => '2',
            'provincia_id' => '177'
        ]);
        District::create([
            'name_distrito' => 'Bajo Biavo',
            'cod_ubig' => '3',
            'provincia_id' => '177'
        ]);
        District::create([
            'name_distrito' => 'Huallaga',
            'cod_ubig' => '4',
            'provincia_id' => '177'
        ]);
        District::create([
            'name_distrito' => 'San Pablo',
            'cod_ubig' => '5',
            'provincia_id' => '177'
        ]);
        District::create([
            'name_distrito' => 'San Rafael',
            'cod_ubig' => '6',
            'provincia_id' => '177'
        ]);


        District::create([
            'name_distrito' => 'San José de Sisa',
            'cod_ubig' => '1',
            'provincia_id' => '178'
        ]);
        District::create([
            'name_distrito' => 'Agua Blanca',
            'cod_ubig' => '2',
            'provincia_id' => '178'
        ]);
        District::create([
            'name_distrito' => 'San Martín',
            'cod_ubig' => '3',
            'provincia_id' => '178'
        ]);
        District::create([
            'name_distrito' => 'Santa Rosa',
            'cod_ubig' => '4',
            'provincia_id' => '178'
        ]);
        District::create([
            'name_distrito' => 'Shatoja',
            'cod_ubig' => '5',
            'provincia_id' => '178'
        ]);


        District::create([
            'name_distrito' => 'Saposoa',
            'cod_ubig' => '1',
            'provincia_id' => '179'
        ]);
        District::create([
            'name_distrito' => 'Alto Saposoa',
            'cod_ubig' => '2',
            'provincia_id' => '179'
        ]);
        District::create([
            'name_distrito' => 'El Eslabón',
            'cod_ubig' => '3',
            'provincia_id' => '179'
        ]);
        District::create([
            'name_distrito' => 'Piscoyacu',
            'cod_ubig' => '4',
            'provincia_id' => '179'
        ]);
        District::create([
            'name_distrito' => 'Sacanche',
            'cod_ubig' => '5',
            'provincia_id' => '179'
        ]);
        District::create([
            'name_distrito' => 'Tingo de Saposoa',
            'cod_ubig' => '6',
            'provincia_id' => '179'
        ]);


        District::create([
            'name_distrito' => 'Lamas',
            'cod_ubig' => '1',
            'provincia_id' => '180'
        ]);
        District::create([
            'name_distrito' => 'Alonso de Alvarado',
            'cod_ubig' => '2',
            'provincia_id' => '180'
        ]);
        District::create([
            'name_distrito' => 'Barranquita',
            'cod_ubig' => '3',
            'provincia_id' => '180'
        ]);
        District::create([
            'name_distrito' => 'Caynarachi',
            'cod_ubig' => '4',
            'provincia_id' => '180'
        ]);
        District::create([
            'name_distrito' => 'Cuñumbuqui',
            'cod_ubig' => '5',
            'provincia_id' => '180'
        ]);
        District::create([
            'name_distrito' => 'Pinto Recodo',
            'cod_ubig' => '6',
            'provincia_id' => '180'
        ]);
        District::create([
            'name_distrito' => 'Rumisapa',
            'cod_ubig' => '7',
            'provincia_id' => '180'
        ]);
        District::create([
            'name_distrito' => 'San Roque de Cumbaza',
            'cod_ubig' => '8',
            'provincia_id' => '180'
        ]);
        District::create([
            'name_distrito' => 'Shanao',
            'cod_ubig' => '9',
            'provincia_id' => '180'
        ]);
        District::create([
            'name_distrito' => 'Tabalosos',
            'cod_ubig' => '10',
            'provincia_id' => '180'
        ]);
        District::create([
            'name_distrito' => 'Zapatero',
            'cod_ubig' => '11',
            'provincia_id' => '180'
        ]);



        District::create([
            'name_distrito' => 'Juanjuí',
            'cod_ubig' => '1',
            'provincia_id' => '181'
        ]);
        District::create([
            'name_distrito' => 'Campanilla',
            'cod_ubig' => '2',
            'provincia_id' => '181'
        ]);
        District::create([
            'name_distrito' => 'Huicungo',
            'cod_ubig' => '3',
            'provincia_id' => '181'
        ]);
        District::create([
            'name_distrito' => 'Pachiza',
            'cod_ubig' => '4',
            'provincia_id' => '181'
        ]);
        District::create([
            'name_distrito' => 'Pajarillo',
            'cod_ubig' => '5',
            'provincia_id' => '181'
        ]);



        District::create([
            'name_distrito' => 'Picota',
            'cod_ubig' => '1',
            'provincia_id' => '182'
        ]);
        District::create([
            'name_distrito' => 'Buenos Aires',
            'cod_ubig' => '2',
            'provincia_id' => '182'
        ]);
        District::create([
            'name_distrito' => 'Caspisapa',
            'cod_ubig' => '3',
            'provincia_id' => '182'
        ]);
        District::create([
            'name_distrito' => 'Pilluana',
            'cod_ubig' => '4',
            'provincia_id' => '182'
        ]);
        District::create([
            'name_distrito' => 'Pucacaca',
            'cod_ubig' => '5',
            'provincia_id' => '182'
        ]);
        District::create([
            'name_distrito' => 'San Cristóbal',
            'cod_ubig' => '6',
            'provincia_id' => '182'
        ]);
        District::create([
            'name_distrito' => 'San Hilarión',
            'cod_ubig' => '7',
            'provincia_id' => '182'
        ]);
        District::create([
            'name_distrito' => 'Shamboyacu',
            'cod_ubig' => '8',
            'provincia_id' => '182'
        ]);
        District::create([
            'name_distrito' => 'Tingo de Ponasa',
            'cod_ubig' => '9',
            'provincia_id' => '182'
        ]);
        District::create([
            'name_distrito' => 'Tres Unidos',
            'cod_ubig' => '10',
            'provincia_id' => '182'
        ]);



        District::create([
            'name_distrito' => 'Rioja',
            'cod_ubig' => '1',
            'provincia_id' => '183'
        ]);
        District::create([
            'name_distrito' => 'Awajun',
            'cod_ubig' => '2',
            'provincia_id' => '183'
        ]);
        District::create([
            'name_distrito' => 'Elías Soplin Vargas',
            'cod_ubig' => '3',
            'provincia_id' => '183'
        ]);
        District::create([
            'name_distrito' => 'Nueva Cajamarca',
            'cod_ubig' => '4',
            'provincia_id' => '183'
        ]);
        District::create([
            'name_distrito' => 'Pardo Miguel',
            'cod_ubig' => '5',
            'provincia_id' => '183'
        ]);
        District::create([
            'name_distrito' => 'Posic',
            'cod_ubig' => '6',
            'provincia_id' => '183'
        ]);
        District::create([
            'name_distrito' => 'San Fernando',
            'cod_ubig' => '7',
            'provincia_id' => '183'
        ]);
        District::create([
            'name_distrito' => 'Yorongos',
            'cod_ubig' => '8',
            'provincia_id' => '183'
        ]);
        District::create([
            'name_distrito' => 'Yuracyacu',
            'cod_ubig' => '9',
            'provincia_id' => '183'
        ]);



        District::create([
            'name_distrito' => 'Tarapoto',
            'cod_ubig' => '1',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'Alberto Leveau',
            'cod_ubig' => '2',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'Cacatachi',
            'cod_ubig' => '3',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'Chazuta',
            'cod_ubig' => '4',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'Chipurana',
            'cod_ubig' => '5',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'El Porvenir',
            'cod_ubig' => '6',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'Huimbayoc',
            'cod_ubig' => '7',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'Juan Guerra',
            'cod_ubig' => '8',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'La Banda de Shilcayo',
            'cod_ubig' => '9',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'Morales',
            'cod_ubig' => '10',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'Papaplaya',
            'cod_ubig' => '11',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'San Antonio',
            'cod_ubig' => '12',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'Sauce',
            'cod_ubig' => '13',
            'provincia_id' => '184'
        ]);
        District::create([
            'name_distrito' => 'Shapaja',
            'cod_ubig' => '14',
            'provincia_id' => '184'
        ]);



        District::create([
            'name_distrito' => 'Tocache',
            'cod_ubig' => '1',
            'provincia_id' => '185'
        ]);
        District::create([
            'name_distrito' => 'Nuevo Progreso',
            'cod_ubig' => '2',
            'provincia_id' => '185'
        ]);
        District::create([
            'name_distrito' => 'Polvora',
            'cod_ubig' => '3',
            'provincia_id' => '185'
        ]);
        District::create([
            'name_distrito' => 'Shunte',
            'cod_ubig' => '4',
            'provincia_id' => '185'
        ]);
        District::create([
            'name_distrito' => 'Uchiza',
            'cod_ubig' => '5',
            'provincia_id' => '185'
        ]);



        District::create([
            'name_distrito' => 'Tacna',
            'cod_ubig' => '1',
            'provincia_id' => '186'
        ]);
        District::create([
            'name_distrito' => 'Alto de la Alianza',
            'cod_ubig' => '2',
            'provincia_id' => '186'
        ]);
        District::create([
            'name_distrito' => 'Calana',
            'cod_ubig' => '3',
            'provincia_id' => '186'
        ]);
        District::create([
            'name_distrito' => 'Ciudad Nueva',
            'cod_ubig' => '4',
            'provincia_id' => '186'
        ]);
        District::create([
            'name_distrito' => 'Inclan',
            'cod_ubig' => '5',
            'provincia_id' => '186'
        ]);
        District::create([
            'name_distrito' => 'Pachia',
            'cod_ubig' => '6',
            'provincia_id' => '186'
        ]);
        District::create([
            'name_distrito' => 'Palca',
            'cod_ubig' => '7',
            'provincia_id' => '186'
        ]);
        District::create([
            'name_distrito' => 'Pocollay',
            'cod_ubig' => '8',
            'provincia_id' => '186'
        ]);
        District::create([
            'name_distrito' => 'Sama',
            'cod_ubig' => '9',
            'provincia_id' => '186'
        ]);
        District::create([
            'name_distrito' => 'Coronel Gregorio Albarracín Lanchipa',
            'cod_ubig' => '10',
            'provincia_id' => '186'
        ]);
        District::create([
            'name_distrito' => 'La Yarada los Palos',
            'cod_ubig' => '11',
            'provincia_id' => '186'
        ]);



        District::create([
            'name_distrito' => 'Candarave',
            'cod_ubig' => '1',
            'provincia_id' => '187'
        ]);
        District::create([
            'name_distrito' => 'Cairani',
            'cod_ubig' => '2',
            'provincia_id' => '187'
        ]);
        District::create([
            'name_distrito' => 'Camilaca',
            'cod_ubig' => '3',
            'provincia_id' => '187'
        ]);
        District::create([
            'name_distrito' => 'Curibaya',
            'cod_ubig' => '4',
            'provincia_id' => '187'
        ]);
        District::create([
            'name_distrito' => 'Huanuara',
            'cod_ubig' => '5',
            'provincia_id' => '187'
        ]);
        District::create([
            'name_distrito' => 'Quilahuani',
            'cod_ubig' => '6',
            'provincia_id' => '187'
        ]);



        District::create([
            'name_distrito' => 'Locumba',
            'cod_ubig' => '1',
            'provincia_id' => '188'
        ]);
        District::create([
            'name_distrito' => 'Ilabaya',
            'cod_ubig' => '2',
            'provincia_id' => '188'
        ]);
        District::create([
            'name_distrito' => 'Ite',
            'cod_ubig' => '3',
            'provincia_id' => '188'
        ]);


        District::create([
            'name_distrito' => 'Tarata',
            'cod_ubig' => '1',
            'provincia_id' => '189'
        ]);
        District::create([
            'name_distrito' => 'Héroes Albarracín',
            'cod_ubig' => '2',
            'provincia_id' => '189'
        ]);
        District::create([
            'name_distrito' => 'Estique',
            'cod_ubig' => '3',
            'provincia_id' => '189'
        ]);
        District::create([
            'name_distrito' => 'Estique-Pampa',
            'cod_ubig' => '4',
            'provincia_id' => '189'
        ]);
        District::create([
            'name_distrito' => 'Sitajara',
            'cod_ubig' => '5',
            'provincia_id' => '189'
        ]);
        District::create([
            'name_distrito' => 'Susapaya',
            'cod_ubig' => '6',
            'provincia_id' => '189'
        ]);
        District::create([
            'name_distrito' => 'Tarucachi',
            'cod_ubig' => '7',
            'provincia_id' => '189'
        ]);
        District::create([
            'name_distrito' => 'Ticaco',
            'cod_ubig' => '8',
            'provincia_id' => '189'
        ]);


        District::create([
            'name_distrito' => 'Tumbes',
            'cod_ubig' => '1',
            'provincia_id' => '190'
        ]);
        District::create([
            'name_distrito' => 'Corrales',
            'cod_ubig' => '2',
            'provincia_id' => '190'
        ]);
        District::create([
            'name_distrito' => 'La Cruz',
            'cod_ubig' => '3',
            'provincia_id' => '190'
        ]);
        District::create([
            'name_distrito' => 'Pampas de Hospital',
            'cod_ubig' => '4',
            'provincia_id' => '190'
        ]);
        District::create([
            'name_distrito' => 'San Jacinto',
            'cod_ubig' => '5',
            'provincia_id' => '190'
        ]);
        District::create([
            'name_distrito' => 'San Juan de la Virgen',
            'cod_ubig' => '6',
            'provincia_id' => '190'
        ]);



        District::create([
            'name_distrito' => 'Zorritos',
            'cod_ubig' => '1',
            'provincia_id' => '191'
        ]);
        District::create([
            'name_distrito' => 'Casitas',
            'cod_ubig' => '2',
            'provincia_id' => '191'
        ]);
        District::create([
            'name_distrito' => 'Canoas de Punta Sal',
            'cod_ubig' => '3',
            'provincia_id' => '191'
        ]);


        District::create([
            'name_distrito' => 'Zarumilla',
            'cod_ubig' => '1',
            'provincia_id' => '192'
        ]);
        District::create([
            'name_distrito' => 'Aguas Verdes',
            'cod_ubig' => '2',
            'provincia_id' => '192'
        ]);
        District::create([
            'name_distrito' => 'Matapalo',
            'cod_ubig' => '3',
            'provincia_id' => '192'
        ]);
        District::create([
            'name_distrito' => 'Papayal',
            'cod_ubig' => '4',
            'provincia_id' => '192'
        ]);



        District::create([
            'name_distrito' => 'Calleria',
            'cod_ubig' => '1',
            'provincia_id' => '193'
        ]);
        District::create([
            'name_distrito' => 'Campoverde',
            'cod_ubig' => '2',
            'provincia_id' => '193'
        ]);
        District::create([
            'name_distrito' => 'Iparia',
            'cod_ubig' => '3',
            'provincia_id' => '193'
        ]);
        District::create([
            'name_distrito' => 'Masisea',
            'cod_ubig' => '4',
            'provincia_id' => '193'
        ]);
        District::create([
            'name_distrito' => 'Yarinacocha',
            'cod_ubig' => '5',
            'provincia_id' => '193'
        ]);
        District::create([
            'name_distrito' => 'Nueva Requena',
            'cod_ubig' => '6',
            'provincia_id' => '193'
        ]);
        District::create([
            'name_distrito' => 'Manantay',
            'cod_ubig' => '7',
            'provincia_id' => '193'
        ]);


        District::create([
            'name_distrito' => 'Raymondi',
            'cod_ubig' => '1',
            'provincia_id' => '194'
        ]);
        District::create([
            'name_distrito' => 'Sepahua',
            'cod_ubig' => '2',
            'provincia_id' => '194'
        ]);
        District::create([
            'name_distrito' => 'Tahuania',
            'cod_ubig' => '3',
            'provincia_id' => '194'
        ]);
        District::create([
            'name_distrito' => 'Yurua',
            'cod_ubig' => '4',
            'provincia_id' => '194'
        ]);

        District::create([
            'name_distrito' => 'Padre Abad',
            'cod_ubig' => '1',
            'provincia_id' => '195'
        ]);
        District::create([
            'name_distrito' => 'Irazola',
            'cod_ubig' => '2',
            'provincia_id' => '195'
        ]);
        District::create([
            'name_distrito' => 'Curimana',
            'cod_ubig' => '3',
            'provincia_id' => '195'
        ]);
        District::create([
            'name_distrito' => 'Neshuya',
            'cod_ubig' => '4',
            'provincia_id' => '195'
        ]);
        District::create([
            'name_distrito' => 'Yurua',
            'cod_ubig' => '4',
            'provincia_id' => '195'
        ]);
        District::create([
            'name_distrito' => 'Alexander Von Humboldt',
            'cod_ubig' => '5',
            'provincia_id' => '195'
        ]); 
        District::create([
            'name_distrito' => 'Purus',
            'cod_ubig' => '1',
            'provincia_id' => '196'
        ]);

    }
}
