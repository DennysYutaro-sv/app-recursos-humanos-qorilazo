<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class AreaController extends Controller
{

    public function index()
    {
        $nro = 0;
        $areas = Area::all();
        return view('area.index',compact('areas','nro'));
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|unique:areas,name',
        ];

        $messages = [
            'name.required' => 'El nombre del área es requerido.',
            'name.string' => 'El nombre del área debe contener caracteres válidos.',
            'name.unique' => 'Esta área ya existe en la base de datos.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $area = Area::create([
                'name' => $request->get('name'),
                'description' => $request->get('description')
            ]);
        }
        return response()->json($validator->messages(), 200);
    }

    public function update(Request $request)
    {
        $rules = [
            'id' => 'required|exists:areas,id',
            'name' => 'required|string'
        ];

        $messages = [
            'id.required' => 'El id del área es requerido.',
            'id.exists' => 'El id del área no existe en la base de datos.',
            'name.required' => 'El nombre del área es requerido.',
            'name.string' => 'El nombre del área debe contener caracteres válidos.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ( !$validator->fails() )
        {
            $area = Area::find($request->get('id'));

            $area->name = $request->get('name');
            $area->description = $request->get('description');
            
            $area->save();
        }
        return response()->json($validator->messages(), 200);
    }
}
