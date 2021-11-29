<?php

namespace App\Http\Controllers;

use App\Profession;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfessionController extends Controller
{

    public function index()
    {
        $nro = 0;
        $professions = Profession::all();
        return view('profession.index',compact('professions','nro'));
    }

    public function store(Request $request)
    {
        $rules = [
            'profession_name' => 'required|string|unique:professions,profession_name',
        ];

        $messages = [
            'profession_name.required' => 'El nombre de la profesión es requerido.',
            'profession_name.string' => 'El nombre de la profesión debe contener caracteres válidos.',
            'profession_name.unique' => 'Esta profesión ya existe en la base de datos.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $profession = Profession::create([
                'profession_name' => $request->get('profession_name'),
                'description' => $request->get('description')
            ]);
        }
        return response()->json($validator->messages(), 200);
    }

    public function update(Request $request)
    {
        $rules = [
            'id' => 'required|exists:professions,id',
            'profession_name' => 'required|string'
        ];

        $messages = [
            'id.required' => 'El id de la profesión es requerido.',
            'id.exists' => 'El id de la profesión es no existe en la base de datos.',
            'profession_name.required' => 'El nombre de la profesión es requerido.',
            'profession_name.string' => 'El nombre de la profesión debe contener caracteres válidos.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ( !$validator->fails() )
        {
            $profession = Profession::find($request->get('id'));

            $profession->profession_name = $request->get('profession_name');
            $profession->description = $request->get('description');
            
            $profession->save();
        }
        return response()->json($validator->messages(), 200);
    }

}
