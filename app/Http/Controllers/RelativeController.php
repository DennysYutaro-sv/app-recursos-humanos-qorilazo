<?php

namespace App\Http\Controllers;

use App\Relative;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RelativeController extends Controller
{
    public function index($id)
    {
        //
        //{{$edad = Carbon::parse($relative->birth_date)->age}}
        $nro = 0;
        $employee = Employee::find($id);
        $relatives = Relative::where('employee_id', $id)->get();
        return view('relative.index', compact('employee','relatives','nro'));
    }

    public function store(Request $request)
    {
        //
        // TODO: Manera #1: Validaciones internas en el controller
        $rules = [
            'employee_id' => 'required|exists:employees,id',
            'name' => 'required|string|min:2|max:30',
            'father_name' => 'required|string|min:2|max:40',
            'mother_name' => 'required|string|min:2|max:40',
            'dni' => 'required|string|size:8',
            'relationship' => 'required',
            'birth_date' => 'required',
            'document' => 'mimes:pdf|max:2048'
        ];

        $messages = [
            'employee_id.required' => 'El id del personal es obligatorio.',
            'employee_id.exists' => 'El id del personal no existe en la base de datos.',
            'name.required' => 'El nombre del pariente es obligatorio.',
            'name.string' => 'El nombre debe contener caracteres válidos.',
            'name.min' => 'El nombre debe contener mínimo 2 caracteres.',
            'name.max' => 'El nombre debe contener máximo 30 caracteres.',
            'father_name.required' => 'El apellido paterno del pariente es obligatorio.',
            'father_name.string' => 'El apellido paterno debe contener caracteres válidos.',
            'father_name.min' => 'El apellido paterno debe contener mínimo 2 caracteres.',
            'father_name.max' => 'El apellido paterno debe contener máximo 40 caracteres.',
            'mother_name.required' => 'El apellido materno del pariente es obligatorio.',
            'mother_name.string' => 'El apellido materno debe contener caracteres válidos.',
            'mother_name.min' => 'El apellido materno debe contener mínimo 2 caracteres.',
            'mother_name.max' => 'El apellido materno debe contener máximo 40 caracteres.',
            'dni.required' => 'El DNI del pariente es obligatorio.',
            'dni.string' => 'El DNI del pariente debe contener caracteres válidos.',
            'dni.size' => 'El DNI ingresado no es correcto, por favor VERIFIQUE.',
            'relationship.required' => 'El parentesco del pariente con el personal es obligatorio.',
            'birth_date.required' => 'La fecha de nacimiento del pariente es obligatorio.',
            'document.max' => 'El documento de dni pesa demasiado,solo debe pesar 2MB max.',
            'document.mimes' => 'El formato del documento de dni no es pdf.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $relative = Relative::create([
                'employee_id' => $request->get('employee_id'),
                'name' => $request->get('name'),
                'father_name' => $request->get('father_name'),
                'mother_name' => $request->get('mother_name'),
                'dni' => $request->get('dni'),
                'relationship' => $request->get('relationship'),
                'birth_date' => $request->get('birth_date')
            ]);
            if (!$request->file('document')) {
                $relative->document = 'familiar-sin-documento.pdf';
                //$employee->save();
            } else {
                $path = public_path().'/images/relatives/';
                $extension = $request->file('document')->getClientOriginalExtension();
                $filename = $relative->id . '.' . $extension;
                $request->file('document')->move($path, $filename);
                $relative->document = $filename;
                //$employee->save();
            }
            $relative->save();
        }
        return response()->json($validator->messages(), 200);
    }

    public function update(Request $request)
    {
        //
        $rules = [
            'relative_id' => 'required|exists:relatives,id',
            'employee_id' => 'required|exists:employees,id',
            'name' => 'required|string|min:2|max:30',
            'father_name' => 'required|string|min:2|max:40',
            'mother_name' => 'required|string|min:2|max:40',
            'dni' => 'required|string|size:8',
            'relationship' => 'required',
            'birth_date' => 'required',
            'document' => 'mimes:pdf|max:2048'
        ];

        $messages = [
            'relative_id.required' => 'El id del familiar es obligatorio.',
            'relative_id.exists' => 'El familiar no existe en la base de datos.',
            'employee_id.required' => 'El id del personal es obligatorio.',
            'employee_id.exists' => 'El personal no existe en la base de datos.',
            'name.required' => 'El nombre del pariente es obligatorio.',
            'name.string' => 'El nombre debe contener caracteres válidos.',
            'name.min' => 'El nombre debe contener mínimo 2 caracteres.',
            'name.max' => 'El nombre debe contener máximo 30 caracteres.',
            'father_name.required' => 'El apellido paterno del pariente es obligatorio.',
            'father_name.string' => 'El apellido paterno debe contener caracteres válidos.',
            'father_name.min' => 'El apellido paterno debe contener mínimo 2 caracteres.',
            'father_name.max' => 'El apellido paterno debe contener máximo 40 caracteres.',
            'mother_name.required' => 'El apellido materno del pariente es obligatorio.',
            'mother_name.string' => 'El apellido materno debe contener caracteres válidos.',
            'mother_name.min' => 'El apellido materno debe contener mínimo 2 caracteres.',
            'mother_name.max' => 'El apellido materno debe contener máximo 40 caracteres.',
            'dni.required' => 'El DNI del pariente es obligatorio.',
            'dni.string' => 'El DNI del pariente debe contener caracteres válidos.',
            'dni.size' => 'El DNI ingresado no es correcto, por favor VERIFIQUE.',
            'relationship.required' => 'El parentesco del pariente con el personal es obligatorio.',
            'birth_date.required' => 'La fecha de nacimiento del pariente es obligatorio.',
            'document.max' => 'El documento de dni pesa demasiado,solo debe pesar 2MB max.',
            'document.mimes' => 'El formato del documento de dni no es pdf.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $relative = Relative::find($request->get('relative_id'));
            $relative->employee_id = $request->get('employee_id');
            $relative->name = $request->get('name');
            $relative->father_name = $request->get('father_name');
            $relative->mother_name = $request->get('mother_name');
            $relative->dni = $request->get('dni');
            $relative->relationship = $request->get('relationship');
            $relative->birth_date = $request->get('birth_date');

            if (!$request->file('document')) {
                if ($relative->document == 'familiar-sin-documento.pdf' || $relative->document == null) {
                    $relative->document = 'familiar-sin-documento.pdf';
                }

            } else {
                $path = public_path().'/images/relatives/';
                $extension = $request->file('document')->getClientOriginalExtension();
                $filename = $relative->id . '.' . $extension;
                $request->file('document')->move($path, $filename);
                $relative->document = $filename;
            }

            $relative->save();
        }

        return response()->json($validator->messages(), 200);
    }

    public function delete(Request $request)
    {
        //
        $rules = [
            'relative_id' => 'required|exists:relatives,id',
        ];

        $messages = [
            'relative_id.required' => 'No se ha recibido el identificador deL pariente.',
            'relative_id.exists' => 'El pariente no existe en la base de datos.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $relative = Relative::find($request->get('relative_id'));

            $relative->delete();
        }

        return response()->json($validator->messages(), 200);
    }
}
