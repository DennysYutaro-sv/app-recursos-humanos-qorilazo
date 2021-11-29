<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('permission:access_dashboard');
Route::middleware('auth')->group(function (){
    Route::prefix('dashboard')->group(function (){
    	Route::get('home', 'HomeController@dashboard')->name('dashboard')
            ->middleware('permission:access_dashboard');

        //----------------------------------------------------------------------------------------
        // TODO: Rutas módulo Employee
        // Index: Muestra la vista para create employee
        Route::get('personal/crear', 'EmployeeController@index')->name('employee.index')
            ->middleware('permission:create_employee');
        //para retornar la lista de provincias al seleccionar un departamento al crear empleado
        Route::get('personal/provinces', 'EmployeeController@getProvinces');
        //para retornar la lista de distritos al seleccionar una provincia al crear empleado
        Route::get('personal/districts', 'EmployeeController@getDistricts');
        //Store: Guarda employee
        Route::post('employee/store', 'EmployeeController@store')->name('employee.store')
            ->middleware('permission:store_employee');
        //Listar empleados
        Route::get('personal/listar', 'EmployeeController@show')->name('employee.show')
            ->middleware('permission:create_employee');
        //Ver empleado
        Route::get('personal/ver/{id}', 'EmployeeController@see')->name('employee.see')
            ->middleware('permission:edit_employee');
        //Vista para modificar un empleado
        Route::get('personal/modificar/{id}', 'EmployeeController@edit')->name('employee.edit')
            ->middleware('permission:edit_employee');
        //Update: guarda la info
        Route::post('employee/update/{id}', 'EmployeeController@update')->name('employee.update')
            ->middleware('permission:update_employee');
        //Destroy: da de baja a un empleado
        Route::post('employee/destroy', 'EmployeeController@destroy')->name('employee.destroy')
            ->middleware('permission:destroy_employee');
        //trashed: devuelve los empleados dados de baja
        Route::get('empleados/dados-de-baja', 'EmployeeController@trashed')->name('employee.trashed')
            ->middleware('permission:restore_employee');
        //restore: restaura un empleado
        Route::post('employee/restore', 'EmployeeController@restore')->name('employee.restore')
            ->middleware('permission:restore_employee');

        //---------------------------------------------------------------------------------------------------

        //------------------------- ROUTES: relatives ---------------------------
        //Muestra vista para crud para agregar familar a empleado-
        Route::get('personal/familar/crear/{id}', 'RelativeController@index')->name('employee.relative.index')
            ->middleware('permission:create_employee');
        Route::post('employee/relative/store', 'RelativeController@store')->name('employee.relative.store')
            ->middleware('permission:create_employee');
        //Modificar un pariente del empleado
        Route::post('employee/relative/update', 'RelativeController@update')->name('employee.relative.update')
            ->middleware('permission:update_employee');
        //To delete a relative
        Route::post('employee/relative/delete', 'RelativeController@delete')->name('employee.relative.delete')
            ->middleware('permission:update_employee');

        //---------------------------------------------------------------------------------------------------

        //-------------------------- ROUTES: contract ---------------------------
        //Vista para generar contrato a personal
        Route::get('contrato/crear', 'ContractController@index')->name('contract.index')
            ->middleware('permission:create_employee');
        //crear contrato a personal
        Route::post('contract/store', 'ContractController@store')->name('contract.store')
            ->middleware('permission:create_employee');
        //Vista Ver contrato de personal
        Route::get('contrato/ver/{id}', 'ContractController@show')->name('contract.show')
            ->middleware('permission:create_employee');
        //Vista Editar contrato de personal
        Route::get('contrato/editar/{id}', 'ContractController@edit')->name('contract.edit')
            ->middleware('permission:create_employee');
        //Modificar un pariente del empleado
        Route::post('contract/update', 'ContractController@update')->name('contract.update')
            ->middleware('permission:update_employee');
        //cancelar contrato
        Route::post('contract/destroy', 'ContractStateController@destroy')->name('contract.destroy')
            ->middleware('permission:create_employee');
            
        //Listar personal con contratos vigentes
        Route::get('contratos/vigentes', 'ContractStateController@current')->name('contract.current')
            ->middleware('permission:create_employee');
        //crear contrato a personal
        Route::get('contratos/periodo-de-prueba', 'ContractStateController@proof')->name('contract.proof')
            ->middleware('permission:create_employee');

        //---------------------------------------------------------------------------------------------------
        //-------------------------- ROUTES: professions ---------------------------
        //Vista para crud de professions
        Route::get('profesion/mantenedor', 'ProfessionController@index')->name('profession.index')
            ->middleware('permission:create_employee');
        //Crear una nueva profession
        Route::post('profession/store', 'ProfessionController@store')->name('profession.store')
            ->middleware('permission:create_employee');
        //Modificar profession
        Route::post('profession/update', 'ProfessionController@update')->name('profession.update')
            ->middleware('permission:create_employee');
        //---------------------------------------------------------------------------------------------------
        //-------------------------- ROUTES: areas ---------------------------
        //Vista para crud de areas
        Route::get('area/mantenedor', 'AreaController@index')->name('area.index')
            ->middleware('permission:create_employee');
        //Crear una nueva area
        Route::post('area/store', 'AreaController@store')->name('area.store')
            ->middleware('permission:create_employee');
        //Modificar area
        Route::post('area/update', 'AreaController@update')->name('area.update')
            ->middleware('permission:create_employee');
        //---------------------------------------------------------------------------------------------------
        //-------------------------- ROUTES: Concept ---------------------------
        //Vista para crud de Concept
        Route::get('concepto/mantenedor', 'ConceptController@index')->name('concept.index')
            ->middleware('permission:create_employee');
        //Crear una nueva Concept
        Route::post('concept/store', 'ConceptController@store')->name('concept.store')
            ->middleware('permission:create_employee');
        //Modificar Concept
        Route::post('concept/update', 'ConceptController@update')->name('concept.update')
            ->middleware('permission:create_employee');
        //---------------------------------------------------------------------------------------------------
        //-------------------------- ROUTES: Agencies ---------------------------
        //Vista para crud de agency
        Route::get('agency/mantenedor', 'AgencyController@index')->name('agency.index')
            ->middleware('permission:create_employee');
        //Crear una nueva agency
        Route::post('agency/store', 'AgencyController@store')->name('agency.store')
            ->middleware('permission:create_employee');
        //Modificar agency
        Route::post('agency/update', 'AgencyController@update')->name('agency.update')
            ->middleware('permission:create_employee');
        //para retornar la lista de provincias al seleccionar un departamento al crear empleado
        Route::get('agency/provinces', 'AgencyController@getProvinces');
        //para retornar la lista de distritos al seleccionar una provincia al crear empleado
        Route::get('agency/districts', 'AgencyController@getDistricts');
        //---------------------------------------------------------------------------------------------------
        //-------------------------- ROUTES: Insurances ---------------------------
        //Vista para crud de insurance
        Route::get('seguros/mantenedor', 'InsuranceController@index')->name('insurance.index')
            ->middleware('permission:create_employee');
        //Crear una nueva insurance
        Route::post('insurance/store', 'InsuranceController@store')->name('insurance.store')
            ->middleware('permission:create_employee');
        //Modificar insurance
        Route::post('insurance/update', 'InsuranceController@update')->name('insurance.update')
            ->middleware('permission:create_employee');
        //---------------------------------------------------------------------------------------------------
        //-------------------------- ROUTES: Positions ---------------------------
        //Vista para crud de position
        Route::get('cargos/mantenedor', 'PositionController@index')->name('position.index')
            ->middleware('permission:create_employee');
        //Crear una nueva position
        Route::post('position/store', 'PositionController@store')->name('position.store')
            ->middleware('permission:create_employee');
        //Modificar position
        Route::post('position/update', 'PositionController@update')->name('position.update')
            ->middleware('permission:create_employee');
        //---------------------------------------------------------------------------------------------------
    });
});