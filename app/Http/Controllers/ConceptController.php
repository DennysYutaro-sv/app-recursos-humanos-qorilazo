<?php

namespace App\Http\Controllers;

use App\Concept;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class ConceptController extends Controller
{

    public function index()
    {
        $nro = 0;
        $concepts = Concept::all();
        return view('concept.index',compact('concepts','nro'));
    }


    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|unique:concepts,name',
        ];

        $messages = [
            'name.required' => 'El nombre del concepto es requerido.',
            'name.string' => 'El nombre del concepto debe contener caracteres válidos.',
            'name.unique' => 'Este concepto ya existe en la base de datos.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $concept = Concept::create([
                'name' => $request->get('name'),
                'description' => $request->get('description')
            ]);
        }
        return response()->json($validator->messages(), 200);
    }

    public function update(Request $request, Concept $concept)
    {
        $rules = [
            'id' => 'required|exists:concepts,id',
            'name' => 'required|string'
        ];

        $messages = [
            'id.required' => 'El id del concepto es requerido.',
            'id.exists' => 'El id del concepto no existe en la base de datos.',
            'name.required' => 'El nombre del concepto es requerido.',
            'name.string' => 'El nombre del concepto debe contener caracteres válidos.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ( !$validator->fails() )
        {
            $concept = Concept::find($request->get('id'));

            $concept->name = $request->get('name');
            $concept->description = $request->get('description');
            
            $concept->save();
        }
        return response()->json($validator->messages(), 200);
    }

}
