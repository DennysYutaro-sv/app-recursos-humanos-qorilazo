<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvinceSeeder extends Seeder
{
    public function run()
    {
        //Creamos las Provinces requeridas relacionados con su respectivo departamento

        //-----------------AMAZONAS----------------
        Province::create([
            'name_provincia' => 'Chachapoyas',
            'cod_ubig' => '1',
            'departamento_id' => '1'
        ]);

        Province::create([
            'name_provincia' => 'Bagua',
            'cod_ubig' => '2',
            'departamento_id' => '1'
        ]);

        Province::create([
            'name_provincia' => 'Bongará',
            'cod_ubig' => '3',
            'departamento_id' => '1'
        ]);

        Province::create([
            'name_provincia' => 'Condorcanqui',
            'cod_ubig' => '4',
            'departamento_id' => '1'
        ]);

        Province::create([
            'name_provincia' => 'Luya',
            'cod_ubig' => '5',
            'departamento_id' => '1'
        ]);

        Province::create([
            'name_provincia' => 'Rodríguez de Mendoza',
            'cod_ubig' => '6',
            'departamento_id' => '1'
        ]);

        Province::create([
            'name_provincia' => 'Utcubamba',
            'cod_ubig' => '7',
            'departamento_id' => '1'
        ]);

    //-----------------------------------------------

        //-------Áncash-------

        Province::create([
            'name_provincia' => 'Huaraz',
            'cod_ubig' => '1',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Aija',
            'cod_ubig' => '2',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Antonio Raymondi',
            'cod_ubig' => '3',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Asunción',
            'cod_ubig' => '4',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Bolognesi',
            'cod_ubig' => '5',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Carhuaz',
            'cod_ubig' => '6',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Carlos Fermín Fitzcarrald',
            'cod_ubig' => '7',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Casma',
            'cod_ubig' => '8',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Corongo',
            'cod_ubig' => '9',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Huari',
            'cod_ubig' => '10',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Huarmey',
            'cod_ubig' => '11',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Huaylas',
            'cod_ubig' => '12',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Mariscal Luzuriaga',
            'cod_ubig' => '13',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Ocros',
            'cod_ubig' => '14',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Pallasca',
            'cod_ubig' => '15',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Pomabamba',
            'cod_ubig' => '16',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Recuay',
            'cod_ubig' => '17',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Santa',
            'cod_ubig' => '18',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Sihuas',
            'cod_ubig' => '19',
            'departamento_id' => '2'
        ]);

        Province::create([
            'name_provincia' => 'Yungay',
            'cod_ubig' => '20',
            'departamento_id' => '2'
        ]);
        //--------------------------------------

        //----------Apurímac-------------------

        Province::create([
            'name_provincia' => 'Abancay',
            'cod_ubig' => '1',
            'departamento_id' => '3'
        ]);

        Province::create([
            'name_provincia' => 'Andahuaylas',
            'cod_ubig' => '2',
            'departamento_id' => '3'
        ]);

        Province::create([
            'name_provincia' => 'Antabamba',
            'cod_ubig' => '3',
            'departamento_id' => '3'
        ]);

        Province::create([
            'name_provincia' => 'Aymaraes',
            'cod_ubig' => '4',
            'departamento_id' => '3'
        ]);

        Province::create([
            'name_provincia' => 'Cotabambas',
            'cod_ubig' => '5',
            'departamento_id' => '3'
        ]);

        Province::create([
            'name_provincia' => 'Chincheros',
            'cod_ubig' => '6',
            'departamento_id' => '3'
        ]);

        Province::create([
            'name_provincia' => 'Grau',
            'cod_ubig' => '7',
            'departamento_id' => '3'
        ]);
        //-------------------------------------

        //-------Arequipa-----------

        Province::create([
            'name_provincia' => 'Arequipa',
            'cod_ubig' => '1',
            'departamento_id' => '4'
        ]);

        Province::create([
            'name_provincia' => 'Camaná',
            'cod_ubig' => '2',
            'departamento_id' => '4'
        ]);

        Province::create([
            'name_provincia' => 'Caravelí',
            'cod_ubig' => '3',
            'departamento_id' => '4'
        ]);

        Province::create([
            'name_provincia' => 'Castilla',
            'cod_ubig' => '4',
            'departamento_id' => '4'
        ]);

        Province::create([
            'name_provincia' => 'Caylloma',
            'cod_ubig' => '5',
            'departamento_id' => '4'
        ]);

        Province::create([
            'name_provincia' => 'Condesuyos',
            'cod_ubig' => '6',
            'departamento_id' => '4'
        ]);

        Province::create([
            'name_provincia' => 'Islay',
            'cod_ubig' => '7',
            'departamento_id' => '4'
        ]);

        Province::create([
            'name_provincia' => 'La Uniòn',
            'cod_ubig' => '8',
            'departamento_id' => '4'
        ]);
        //-------------------------------------------

        //---------Ayacucho----------

        Province::create([
            'name_provincia' => 'Huamanga',
            'cod_ubig' => '1',
            'departamento_id' => '5'
        ]);

        Province::create([
            'name_provincia' => 'Cangallo',
            'cod_ubig' => '2',
            'departamento_id' => '5'
        ]);

        Province::create([
            'name_provincia' => 'Huanca Sancos',
            'cod_ubig' => '3',
            'departamento_id' => '5'
        ]);

        Province::create([
            'name_provincia' => 'Huanta',
            'cod_ubig' => '4',
            'departamento_id' => '5'
        ]);

        Province::create([
            'name_provincia' => 'La Mar',
            'cod_ubig' => '5',
            'departamento_id' => '5'
        ]);

        Province::create([
            'name_provincia' => 'Lucanas',
            'cod_ubig' => '6',
            'departamento_id' => '5'
        ]);

        Province::create([
            'name_provincia' => 'Parinacochas',
            'cod_ubig' => '7',
            'departamento_id' => '5'
        ]);

        Province::create([
            'name_provincia' => 'Pàucar del Sara Sara',
            'cod_ubig' => '8',
            'departamento_id' => '5'
        ]);

        Province::create([
            'name_provincia' => 'Sucre',
            'cod_ubig' => '9',
            'departamento_id' => '5'
        ]);

        Province::create([
            'name_provincia' => 'Víctor Fajardo',
            'cod_ubig' => '10',
            'departamento_id' => '5'
        ]);

        Province::create([
            'name_provincia' => 'Vilcas Huamán',
            'cod_ubig' => '11',
            'departamento_id' => '5'
        ]);
        //----------------------------------------
        //--------Cajamarca-----------

        Province::create([
            'name_provincia' => 'Cajamarca',
            'cod_ubig' => '1',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'Cajabamba',
            'cod_ubig' => '2',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'Celendín',
            'cod_ubig' => '3',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'Chota',
            'cod_ubig' => '4',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'Contumazá',
            'cod_ubig' => '5',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'Cutervo',
            'cod_ubig' => '6',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'Hualgayoc',
            'cod_ubig' => '7',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'Jaén',
            'cod_ubig' => '8',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'San Ignacio',
            'cod_ubig' => '9',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'San Marcos',
            'cod_ubig' => '10',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'San Miguel',
            'cod_ubig' => '11',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'San Pablo',
            'cod_ubig' => '12',
            'departamento_id' => '6'
        ]);

        Province::create([
            'name_provincia' => 'Santa Cruz',
            'cod_ubig' => '13',
            'departamento_id' => '6'
        ]);
        //----------------------------------------------
        //--------------Callao----------------

        Province::create([
            'name_provincia' => 'Prov. Const. del Callao',
            'cod_ubig' => '1',
            'departamento_id' => '7'
        ]);
        //-------------------------------------------
        //------------Cusco----------------

        Province::create([
            'name_provincia' => 'Cusco',
            'cod_ubig' => '1',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Acomayo',
            'cod_ubig' => '2',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Anta',
            'cod_ubig' => '3',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Calca',
            'cod_ubig' => '4',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Canas',
            'cod_ubig' => '5',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Canchis',
            'cod_ubig' => '6',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Chumbivilcas',
            'cod_ubig' => '7',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Espinar',
            'cod_ubig' => '8',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'La Convención',
            'cod_ubig' => '9',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Paruro',
            'cod_ubig' => '10',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Paucartambo',
            'cod_ubig' => '11',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Quispicanchi',
            'cod_ubig' => '12',
            'departamento_id' => '8'
        ]);
        Province::create([
            'name_provincia' => 'Urubamba',
            'cod_ubig' => '13',
            'departamento_id' => '8'
        ]);
        //-------------------------------------------
        //----------Huancavelica------------

        Province::create([
            'name_provincia' => 'Huancavelica',
            'cod_ubig' => '1',
            'departamento_id' => '9'
        ]);
        Province::create([
            'name_provincia' => 'Acobamba',
            'cod_ubig' => '2',
            'departamento_id' => '9'
        ]);
        Province::create([
            'name_provincia' => 'Angaraes',
            'cod_ubig' => '3',
            'departamento_id' => '9'
        ]);
        Province::create([
            'name_provincia' => 'Castrovirreyna',
            'cod_ubig' => '4',
            'departamento_id' => '9'
        ]);
        Province::create([
            'name_provincia' => 'Churcampa',
            'cod_ubig' => '5',
            'departamento_id' => '9'
        ]);
        Province::create([
            'name_provincia' => 'Huaytará',
            'cod_ubig' => '6',
            'departamento_id' => '9'
        ]);
        Province::create([
            'name_provincia' => 'Tayacaja',
            'cod_ubig' => '7',
            'departamento_id' => '9'
        ]);
        //---------------------------------------

        //---------Huánuco-------------

        Province::create([
            'name_provincia' => 'Huánuco',
            'cod_ubig' => '1',
            'departamento_id' => '10'
        ]);
        Province::create([
            'name_provincia' => 'Ambo',
            'cod_ubig' => '2',
            'departamento_id' => '10'
        ]);
        Province::create([
            'name_provincia' => 'Dos de Mayo',
            'cod_ubig' => '3',
            'departamento_id' => '10'
        ]);
        Province::create([
            'name_provincia' => 'Huacaybamba',
            'cod_ubig' => '4',
            'departamento_id' => '10'
        ]);
        Province::create([
            'name_provincia' => 'Huamalíes',
            'cod_ubig' => '5',
            'departamento_id' => '10'
        ]);
        Province::create([
            'name_provincia' => 'Leoncio Prado',
            'cod_ubig' => '6',
            'departamento_id' => '10'
        ]);
        Province::create([
            'name_provincia' => 'Marañón',
            'cod_ubig' => '7',
            'departamento_id' => '10'
        ]);
        Province::create([
            'name_provincia' => 'Pachitea',
            'cod_ubig' => '8',
            'departamento_id' => '10'
        ]);
        Province::create([
            'name_provincia' => 'Puerto Inca',
            'cod_ubig' => '9',
            'departamento_id' => '10'
        ]);
        Province::create([
            'name_provincia' => 'Lauricocha',
            'cod_ubig' => '10',
            'departamento_id' => '10'
        ]);
        Province::create([
            'name_provincia' => 'Yarowilca',
            'cod_ubig' => '11',
            'departamento_id' => '10'
        ]);
        //--------------------------------------------
        //----------------Ica----------------------

        Province::create([
            'name_provincia' => 'Ica',
            'cod_ubig' => '1',
            'departamento_id' => '11'
        ]);
        Province::create([
            'name_provincia' => 'Chincha',
            'cod_ubig' => '2',
            'departamento_id' => '11'
        ]);
        Province::create([
            'name_provincia' => 'Nasca',
            'cod_ubig' => '3',
            'departamento_id' => '11'
        ]);
        Province::create([
            'name_provincia' => 'Palpa',
            'cod_ubig' => '4',
            'departamento_id' => '11'
        ]);
        Province::create([
            'name_provincia' => 'Pisco',
            'cod_ubig' => '5',
            'departamento_id' => '11'
        ]);
        //------------------------------------------
        //-----------Junín-----------------

        Province::create([
            'name_provincia' => 'Huancayo',
            'cod_ubig' => '1',
            'departamento_id' => '12'
        ]);
        Province::create([
            'name_provincia' => 'Concepción',
            'cod_ubig' => '2',
            'departamento_id' => '12'
        ]);
        Province::create([
            'name_provincia' => 'Chanchamayo',
            'cod_ubig' => '3',
            'departamento_id' => '12'
        ]);
        Province::create([
            'name_provincia' => 'Jauja',
            'cod_ubig' => '4',
            'departamento_id' => '12'
        ]);
        Province::create([
            'name_provincia' => 'Junín',
            'cod_ubig' => '5',
            'departamento_id' => '12'
        ]);
        Province::create([
            'name_provincia' => 'Satipo',
            'cod_ubig' => '6',
            'departamento_id' => '12'
        ]);
        Province::create([
            'name_provincia' => 'Tarma',
            'cod_ubig' => '7',
            'departamento_id' => '12'
        ]);
        Province::create([
            'name_provincia' => 'Yauli',
            'cod_ubig' => '8',
            'departamento_id' => '12'
        ]);
        Province::create([
            'name_provincia' => 'Chupaca',
            'cod_ubig' => '9',
            'departamento_id' => '12'
        ]);
        //----------------------------------------
        //-------La Libertad----------------

        Province::create([
            'name_provincia' => 'Trujillo',
            'cod_ubig' => '1',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Ascope',
            'cod_ubig' => '2',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Bolívar',
            'cod_ubig' => '3',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Chepén',
            'cod_ubig' => '4',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Julcán',
            'cod_ubig' => '5',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Otuzco',
            'cod_ubig' => '6',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Pacasmayo',
            'cod_ubig' => '7',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Pataz',
            'cod_ubig' => '8',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Sánchez Carrión',
            'cod_ubig' => '9',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Santiago de Chuco',
            'cod_ubig' => '10',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Gran Chimú',
            'cod_ubig' => '11',
            'departamento_id' => '13'
        ]);
        Province::create([
            'name_provincia' => 'Virú',
            'cod_ubig' => '12',
            'departamento_id' => '13'
        ]);
        //---------------------------------------
        //------------Lambayeque-------------------
        Province::create([
            'name_provincia' => 'Chiclayo',
            'cod_ubig' => '1',
            'departamento_id' => '14'
        ]);
        Province::create([
            'name_provincia' => 'Ferreñafe',
            'cod_ubig' => '2',
            'departamento_id' => '14'
        ]);
        Province::create([
            'name_provincia' => 'Lambayeque',
            'cod_ubig' => '3',
            'departamento_id' => '14'
        ]);
        //_--------------------------------------
        //------------lIMA----------------------
        Province::create([
            'name_provincia' => 'Lima',
            'cod_ubig' => '1',
            'departamento_id' => '15'
        ]);
        Province::create([
            'name_provincia' => 'Barranca',
            'cod_ubig' => '2',
            'departamento_id' => '15'
        ]);
        Province::create([
            'name_provincia' => 'Cajatambo',
            'cod_ubig' => '3',
            'departamento_id' => '15'
        ]);
        Province::create([
            'name_provincia' => 'Canta',
            'cod_ubig' => '4',
            'departamento_id' => '15'
        ]);
        Province::create([
            'name_provincia' => 'Cañete',
            'cod_ubig' => '5',
            'departamento_id' => '15'
        ]);
        Province::create([
            'name_provincia' => 'Huaral',
            'cod_ubig' => '6',
            'departamento_id' => '15'
        ]);
        Province::create([
            'name_provincia' => 'Huarochirí',
            'cod_ubig' => '7',
            'departamento_id' => '15'
        ]);
        Province::create([
            'name_provincia' => 'Huaura',
            'cod_ubig' => '8',
            'departamento_id' => '15'
        ]);
        Province::create([
            'name_provincia' => 'Oyón',
            'cod_ubig' => '9',
            'departamento_id' => '15'
        ]);
        Province::create([
            'name_provincia' => 'Yauyos',
            'cod_ubig' => '10',
            'departamento_id' => '15'
        ]);
        //------------------------------------------
        //---------NRO 16-------

        Province::create([
            'name_provincia' => 'Maynas',
            'cod_ubig' => '1',
            'departamento_id' => '16'
        ]);
        Province::create([
            'name_provincia' => 'Alto Amazonas',
            'cod_ubig' => '2',
            'departamento_id' => '16'
        ]);
        Province::create([
            'name_provincia' => 'Loreto',
            'cod_ubig' => '3',
            'departamento_id' => '16'
        ]);
        Province::create([
            'name_provincia' => 'Mariscal Ramón Castilla',
            'cod_ubig' => '4',
            'departamento_id' => '16'
        ]);
        Province::create([
            'name_provincia' => 'Requena',
            'cod_ubig' => '5',
            'departamento_id' => '16'
        ]);
        Province::create([
            'name_provincia' => 'Ucayali',
            'cod_ubig' => '6',
            'departamento_id' => '16'
        ]);
        Province::create([
            'name_provincia' => 'Datem del Marañón',
            'cod_ubig' => '7',
            'departamento_id' => '16'
        ]);
        Province::create([
            'name_provincia' => 'Putumayo',
            'cod_ubig' => '8',
            'departamento_id' => '16'
        ]);
        //----------------------------------------------
        //---------nRO 17-------------------

        Province::create([
            'name_provincia' => 'Tambopata',
            'cod_ubig' => '1',
            'departamento_id' => '17'
        ]);
        Province::create([
            'name_provincia' => 'Manu',
            'cod_ubig' => '2',
            'departamento_id' => '17'
        ]);
        Province::create([
            'name_provincia' => 'Tahuamanu',
            'cod_ubig' => '3',
            'departamento_id' => '17'
        ]);
        //----------------------------------------------
        //---------NRO 18-----------------------

        Province::create([
            'name_provincia' => 'Mariscal Nieto',
            'cod_ubig' => '1',
            'departamento_id' => '18'
        ]);
        Province::create([
            'name_provincia' => 'General Sánchez Cerro',
            'cod_ubig' => '2',
            'departamento_id' => '18'
        ]);
        Province::create([
            'name_provincia' => 'Ilo',
            'cod_ubig' => '3',
            'departamento_id' => '18'
        ]);
        //---------------------------------------------
        //--------------------NRO 19------------------

        Province::create([
            'name_provincia' => 'Pasco',
            'cod_ubig' => '1',
            'departamento_id' => '19'
        ]);
        Province::create([
            'name_provincia' => 'Daniel Alcides Carrión',
            'cod_ubig' => '2',
            'departamento_id' => '19'
        ]);
        Province::create([
            'name_provincia' => 'Oxapampa',
            'cod_ubig' => '3',
            'departamento_id' => '19'
        ]);

        //-----------------------------------------------
        //----------------NRO 20------------------------

        Province::create([
            'name_provincia' => 'Piura',
            'cod_ubig' => '1',
            'departamento_id' => '20'
        ]);
        Province::create([
            'name_provincia' => 'Ayabaca',
            'cod_ubig' => '2',
            'departamento_id' => '20'
        ]);
        Province::create([
            'name_provincia' => 'Huancabamba',
            'cod_ubig' => '3',
            'departamento_id' => '20'
        ]);
        Province::create([
            'name_provincia' => 'Morropón',
            'cod_ubig' => '4',
            'departamento_id' => '20'
        ]);
        Province::create([
            'name_provincia' => 'Paita',
            'cod_ubig' => '5',
            'departamento_id' => '20'
        ]);
        Province::create([
            'name_provincia' => 'Sullana',
            'cod_ubig' => '6',
            'departamento_id' => '20'
        ]);
        Province::create([
            'name_provincia' => 'Talara',
            'cod_ubig' => '7',
            'departamento_id' => '20'
        ]);
        Province::create([
            'name_provincia' => 'Sechura',
            'cod_ubig' => '8',
            'departamento_id' => '20'
        ]);

        //---------------------------------------------
        //--------------NRO 21-------------------------

        Province::create([
            'name_provincia' => 'Puno',
            'cod_ubig' => '1',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'Azángaro',
            'cod_ubig' => '2',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'Carabaya',
            'cod_ubig' => '3',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'Chucuito',
            'cod_ubig' => '4',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'El Collao',
            'cod_ubig' => '5',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'Huancané',
            'cod_ubig' => '6',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'Lampa',
            'cod_ubig' => '7',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'Melgar',
            'cod_ubig' => '8',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'Moho',
            'cod_ubig' => '9',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'San Antonio de Putina',
            'cod_ubig' => '10',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'San Román',
            'cod_ubig' => '11',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'Sandia',
            'cod_ubig' => '12',
            'departamento_id' => '21'
        ]);
        Province::create([
            'name_provincia' => 'Yunguyo',
            'cod_ubig' => '13',
            'departamento_id' => '21'
        ]);

        //----------------------------------------------
        //--------------NRO 22-----------------------

        Province::create([
            'name_provincia' => 'Moyobamba',
            'cod_ubig' => '1',
            'departamento_id' => '22'
        ]);
        Province::create([
            'name_provincia' => 'Bellavista',
            'cod_ubig' => '2',
            'departamento_id' => '22'
        ]);
        Province::create([
            'name_provincia' => 'El Dorado',
            'cod_ubig' => '3',
            'departamento_id' => '22'
        ]);
        Province::create([
            'name_provincia' => 'Huallaga',
            'cod_ubig' => '4',
            'departamento_id' => '22'
        ]);
        Province::create([
            'name_provincia' => 'Lamas',
            'cod_ubig' => '5',
            'departamento_id' => '22'
        ]);
        Province::create([
            'name_provincia' => 'Mariscal Cáceres',
            'cod_ubig' => '6',
            'departamento_id' => '22'
        ]);
        Province::create([
            'name_provincia' => 'Picota',
            'cod_ubig' => '7',
            'departamento_id' => '22'
        ]);
        Province::create([
            'name_provincia' => 'Rioja',
            'cod_ubig' => '8',
            'departamento_id' => '22'
        ]);
        Province::create([
            'name_provincia' => 'San Martín',
            'cod_ubig' => '9',
            'departamento_id' => '22'
        ]);
        Province::create([
            'name_provincia' => 'Tocache',
            'cod_ubig' => '10',
            'departamento_id' => '22'
        ]);
        //------------------------------------------
        //--------NRO 23

        Province::create([
            'name_provincia' => 'Tacna',
            'cod_ubig' => '1',
            'departamento_id' => '23'
        ]);
        Province::create([
            'name_provincia' => 'Candarave',
            'cod_ubig' => '2',
            'departamento_id' => '23'
        ]);
        Province::create([
            'name_provincia' => 'Jorge Basadre',
            'cod_ubig' => '3',
            'departamento_id' => '23'
        ]);
        Province::create([
            'name_provincia' => 'Tarata',
            'cod_ubig' => '4',
            'departamento_id' => '23'
        ]);
        //---------------------------------------------
        //---------------NRO 24-------------------

        Province::create([
            'name_provincia' => 'Tumbes',
            'cod_ubig' => '1',
            'departamento_id' => '24'
        ]);
        Province::create([
            'name_provincia' => 'Contralmirante Villar',
            'cod_ubig' => '2',
            'departamento_id' => '24'
        ]);
        Province::create([
            'name_provincia' => 'Zarumilla',
            'cod_ubig' => '3',
            'departamento_id' => '24'
        ]);

        //----------------------------------------------
        //-----------NRO 25------------

        Province::create([
            'name_provincia' => 'Coronel Portillo',
            'cod_ubig' => '1',
            'departamento_id' => '25'
        ]);
        Province::create([
            'name_provincia' => 'Atalaya',
            'cod_ubig' => '2',
            'departamento_id' => '25'
        ]);
        Province::create([
            'name_provincia' => 'Padre Abad',
            'cod_ubig' => '3',
            'departamento_id' => '25'
        ]);
        Province::create([
            'name_provincia' => 'Purús',
            'cod_ubig' => '4',
            'departamento_id' => '25'
        ]);

    }
}
