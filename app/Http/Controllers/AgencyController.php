<?php

namespace App\Http\Controllers;

use App\Agency;
use App\District;
use App\Department;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgencyController extends Controller
{

    public function index()
    {
        $agencies = Agency::all();
        $departments = Department::all();
        $nro = 0;
        return view('agency.index',compact('agencies','nro','departments'));
    }

    public function getProvinces(Request $request)
    {
        //Nos retornara las provincias que tengan departamento_id igual al request
        if($request->ajax()){
            
            $provinces = Province::where('departamento_id', $request->department_id)->get();
            foreach ($provinces as $province) {
                $provincesArray[$province->id] = $province->name_provincia;
            }
            return response()->json($provincesArray);
        }
    }
    public function getDistricts(Request $request)
    {
        //Nos retornara los distritos que tengan provincia_id igual al request
        if($request->ajax()){
            
            $districts = District::where('provincia_id', $request->province_id)->get();
            foreach ($districts as $district) {
                $districtsArray[$district->id] = $district->name_distrito;
            }
            return response()->json($districtsArray);
        }
    }

    public function store(Request $request)
    {
        $rules = [
            'agency_name' => 'required|string|unique:agencies,agency_name',
            'agency_address' => 'required|string|min:5',
            'departamento_id' => 'required',
            'provincia_id' => 'required',
            'distrito_id' => 'required'
        ];

        $messages = [
            'agency_name.required' => 'El nombre del local es requerido.',
            'agency_name.string' => 'El nombre del local debe contener caracteres válidos.',
            'agency_name.unique' => 'Esta nombre de local ya existe en la base de datos, por favor verifique.',
            'agency_address.required' => 'La dirección del local es obligatorio.',
            'agency_address.string' => 'La dirección del local debe contener caracteres válidos.',
            'agency_address.min' => 'La dirección del local debe tener como mínimo 5 caracteres.',
            'departamento_id.required' => 'El departamento es obligatorio.',
            'provincia_id.required' => 'La provincia es obligatorio.',
            'distrito_id.required' => 'El distrito es obligatorio.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $agency = Agency::create([
                'agency_name' => $request->get('agency_name'),
                'agency_address' => $request->get('agency_address'),
                'departamento_id' => $request->get('departamento_id'),
                'provincia_id' => $request->get('provincia_id'),
                'distrito_id' => $request->get('distrito_id')
            ]);
        }
        return response()->json($validator->messages(), 200);
    }

    public function update(Request $request)
    {
        $rules = [
            'id' => 'required|exists:agencies,id',
            'agency_name' => 'required|string',
            'agency_address' => 'required|string|min:5',
            'departamento_id' => 'required',
            'provincia_id' => 'required',
            'distrito_id' => 'required'
        ];

        $messages = [
            'id.required' => 'El id del local es requerido.',
            'id.exists' => 'El id del local es no existe en la base de datos.',
            'agency_name.required' => 'El nombre del local es requerido.',
            'agency_name.string' => 'El nombre del local debe contener caracteres válidos.',
            'agency_address.required' => 'La dirección del local es obligatorio.',
            'agency_address.string' => 'La dirección del local debe contener caracteres válidos.',
            'agency_address.min' => 'La dirección del local debe tener como mínimo 5 caracteres.',
            'departamento_id.required' => 'El departamento es obligatorio.',
            'provincia_id.required' => 'La provincia es obligatorio.',
            'distrito_id.required' => 'El distrito es obligatorio.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $agency = Agency::find($request->get('id'));

            $agency->agency_name = $request->get('agency_name');
            $agency->agency_address = $request->get('agency_address');
            $agency->departamento_id = $request->get('departamento_id');
            $agency->provincia_id = $request->get('provincia_id');
            $agency->distrito_id = $request->get('distrito_id');
            
            $agency->save();
        }
        return response()->json($validator->messages(), 200);
    }

}
