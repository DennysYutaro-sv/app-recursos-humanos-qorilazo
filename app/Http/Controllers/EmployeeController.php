<?php

namespace App\Http\Controllers;

use App\Employee;

use App\District;
use App\Department;
use App\Province;
use App\Agency;
use App\Profession;
use App\Relative;
use Carbon\Carbon;
use App\ContractState;
use App\Contract;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use App\Http\Requests\StoreEmployeeRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $agencies = Agency::get(['id','agency_name']);
        $professions = Profession::all();
        $departments = Department::all();
        return view('employee.index',compact('agencies','departments','professions'));
    }

    public function store(Request $request)
    {
        //Validar datos del empleado
        $rules = [
            'name' => 'required|string|min:2|max:30',
            'father_name' => 'required|string|min:2|max:30',
            'mother_name' => 'required|string|min:2|max:30',
            'dni' => 'required|string|size:8|unique:employees,dni',
            'gender' => 'required',
            'birth_date' => 'required',
            'profession_id' => 'required',
            'email' => 'required|string|min:4|max:60',
            'phone' => 'required|string|min:6|max:20',
            'family_burden' => 'required',
            'license' => 'required',
            'agency_id' => 'required',
            'address' => 'required|string|min:2|max:60',
            'department_id' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
            'curriculum' => 'mimes:pdf|max:2048',
            'criminal_record' => 'mimes:pdf|max:2048',
            'photo' => 'image'
        ];
        $messages = [
            'name.required' => 'El nombre del personal es obligatorio.',
            'name.string' => 'El nombre del personal debe contener caracteres válidos.',
            'name.min' => 'La longitud del nombre del personal es muy corta.',
            'name.max' => 'La longitud del nombre del personal es muy larga.',
            'father_name.required' => 'El apellido paterno del personal es obligatorio.',
            'father_name.string' => 'El apellido paterno del personal debe contener caracteres válidos.',
            'father_name.min' => 'La longitud del apellido paterno del personal es muy corta.',
            'father_name.max' => 'La longitud del apellido paterno del personal es muy larga.',
            'mother_name.required' => 'El apellido materno del personal es obligatorio.',
            'mother_name.string' => 'El apellido materno del personal debe contener caracteres válidos.',
            'mother_name.min' => 'La longitud del apellido materno del personal es muy corta.',
            'mother_name.max' => 'La longitud del apellido materno del personal es muy larga.',
            'dni.required' => 'El DNI del personal es obligatorio.',
            'dni.string' => 'El DNI del personal debe contener caracteres válidos.',
            'dni.size' => 'El DNI ingresado no es correcto, por favor VERIFIQUE.',
            'dni.unique' => 'Este DNI ya esta registrado en nuestro personal, por favor verifique correctamente.',
            'gender.required' => 'El genero del personal es obligatorio.',
            'birth_date.required' => 'La fecha de nacimiento del personal es obligatorio.',
            'profession_id.required' => 'La profesión del personal es obligatorio.',
            'email.required' => 'El email del personal es obligatorio.',
            'email.string' => 'El email del personal debe contener caracteres válidos.',
            'email.min' => 'La longitud del email del personal es muy corta.',
            'email.max' => 'La longitud del email del personal es muy larga.',
            'phone.required' => 'El telefono/celular del personal es obligatorio.',
            'phone.string' => 'El telefono/celular del personal debe contener caracteres válidos.',
            'phone.min' => 'La longitud del telefono/celular del personal es muy corta.',
            'phone.max' => 'La longitud del telefono/celular del personal es muy larga.',
            'family_burden.required' => 'El carga familiar es obligatorio.',
            'license.required' => 'La licencia de conducir es obligatorio.',
            'agency_id.required' => 'La agencia es obligatorio.',
            'address.required' => 'El dirección del personal es obligatorio.',
            'address.string' => 'El dirección del personal debe contener caracteres válidos.',
            'address.min' => 'La longitud del dirección del personal es muy corta.',
            'address.max' => 'La longitud del dirección del personal es muy larga.',
            'department_id.required' => 'El departamento del personal es obligatorio.',
            'province_id.required' => 'La provincia del personal es obligatorio.',
            'district_id.required' => 'El distrito del personal es obligatorio.',
            'curriculum.mimes' => 'El formato del curriculum vitae no es pdf.',
            'curriculum.max' => 'El curriculum vitae pesa demasiado solo debe pesar 2MB max.',
            'criminal_record.mimes' => 'El formato de antecedentes policiales no es pdf.',
            'criminal_record.max' => 'Los antecedentes policiales pesa demasiado solo debe pesar 2MB max.',
            'photo.image' => 'El tipo de archivo de la foto de personal es incorrecto.'
        ];
        //Save a employee
        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $employee = Employee::create([
                'name' => $request->get('name'),
                'father_name' => $request->get('father_name'),
                'mother_name' => $request->get('mother_name'),
                'dni' => $request->get('dni'),
                'gender' => $request->get('gender'),
                'birth_date' => $request->get('birth_date'),
                'profession_id' => $request->get('profession_id'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'family_burden' => $request->get('family_burden'),
                'license' => $request->get('license'),
                'agency_id' => $request->get('agency_id'),
                'address' => $request->get('address'),
                'reference' => $request->get('reference'),
                'department_id' => $request->get('department_id'),
                'province_id' => $request->get('province_id'),
                'district_id' => $request->get('district_id')
            ]);

            // TODO: Tratamiento de un archivo de forma tradicional
            if (!$request->file('photo')) {
                $employee->photo = 'employee.png';
                //$employee->save();
            } else {
                $path = public_path().'/images/employees/';
                $extension = $request->file('photo')->getClientOriginalExtension();
                $filename = $employee->id . '.' . $extension;
                $request->file('photo')->move($path, $filename);
                $employee->photo = $filename;
                //$employee->save();
            }
            // TODO: Tratamiento de un archivo de forma tradicional
            if (!$request->file('curriculum')) {
                $employee->curriculum = 'personal-sin-cv.pdf';
                //$employee->save();
            } else {
                $path = public_path().'/images/curriculums/';
                $extension = $request->file('curriculum')->getClientOriginalExtension();
                $filename = $employee->id . '.' . $extension;
                $request->file('curriculum')->move($path, $filename);
                $employee->curriculum = $filename;
                //$employee->save();
            }
            if (!$request->file('criminal_record')) {
                $employee->criminal_record = 'personal-sin-certificado-de-antecedentes-penales.pdf';
                //$employee->save();
            } else {
                $path = public_path().'/images/criminal-record/';
                $extension = $request->file('criminal_record')->getClientOriginalExtension();
                $filename = $employee->id . '.' . $extension;
                $request->file('criminal_record')->move($path, $filename);
                $employee->criminal_record = $filename;
                //$employee->save();
            }
            $contractState = ContractState::create([
                'start_contract' => '2000-01-01',
                'trial_period' => '2000-01-02',
                'end_contract' => '2000-01-03',
                'employee_id' => $employee->id
            ]);
            $employee->save();
        }
        return response()->json($validator->messages(), 200);
    }
    public function show()
    {
        //ver lista de empleados
        $employees = Employee::get(['id','name','father_name','mother_name','dni','photo','agency_id','phone','family_burden']);
        return view('employee.show',compact('employees'));
    }

    public function see($id)
    {
        $nro = 0;
        $nro1 = 0;
        //ver datos de un empleado
        $employee = Employee::find($id);
        $relatives = Relative::where('employee_id', $id)->get();
        $contracts = Contract::where('employee_id', $id)->get();
        $edad = Carbon::parse($employee->birth_date)->age;
        return view('employee.see', compact('employee','relatives','edad','nro','nro1' ,'contracts'));
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        $agencies = Agency::get(['id','agency_name']);
        $professions = Profession::all();
        $departments = Department::all();
        
        return view('employee.edit',compact('employee','agencies','departments','professions'));
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:2|max:30',
            'father_name' => 'required|string|min:2|max:30',
            'mother_name' => 'required|string|min:2|max:30',
            'dni' => 'required|string|size:8',
            'gender' => 'required',
            'birth_date' => 'required',
            'profession_id' => 'required',
            'email' => 'required|string|min:4|max:60',
            'phone' => 'required|string|min:6|max:20',
            'family_burden' => 'required',
            'license' => 'required',
            'agency_id' => 'required',
            'address' => 'required|string|min:2|max:60',
            'department_id' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
            'curriculum' => 'mimes:pdf|max:2048',
            'criminal_record' => 'mimes:pdf|max:2048',
            'photo' => 'image'
        ];
        $messages = [
            'name.required' => 'El nombre del personal es obligatorio.',
            'name.string' => 'El nombre del personal debe contener caracteres válidos.',
            'name.min' => 'La longitud del nombre del personal es muy corta.',
            'name.max' => 'La longitud del nombre del personal es muy larga.',
            'father_name.required' => 'El apellido paterno del personal es obligatorio.',
            'father_name.string' => 'El apellido paterno del personal debe contener caracteres válidos.',
            'father_name.min' => 'La longitud del apellido paterno del personal es muy corta.',
            'father_name.max' => 'La longitud del apellido paterno del personal es muy larga.',
            'mother_name.required' => 'El apellido materno del personal es obligatorio.',
            'mother_name.string' => 'El apellido materno del personal debe contener caracteres válidos.',
            'mother_name.min' => 'La longitud del apellido materno del personal es muy corta.',
            'mother_name.max' => 'La longitud del apellido materno del personal es muy larga.',
            'dni.required' => 'El DNI del personal es obligatorio.',
            'dni.string' => 'El DNI del personal debe contener caracteres válidos.',
            'dni.size' => 'El DNI ingresado no es correcto, por favor VERIFIQUE.',
            'gender.required' => 'El genero del personal es obligatorio.',
            'birth_date.required' => 'La fecha de nacimiento del personal es obligatorio.',
            'profession_id.required' => 'La profesión del personal es obligatorio.',
            'email.required' => 'El email del personal es obligatorio.',
            'email.string' => 'El email del personal debe contener caracteres válidos.',
            'email.min' => 'La longitud del email del personal es muy corta.',
            'email.max' => 'La longitud del email del personal es muy larga.',
            'phone.required' => 'El telefono/celular del personal es obligatorio.',
            'phone.string' => 'El telefono/celular del personal debe contener caracteres válidos.',
            'phone.min' => 'La longitud del telefono/celular del personal es muy corta.',
            'phone.max' => 'La longitud del telefono/celular del personal es muy larga.',
            'family_burden.required' => 'El carga familiar es obligatorio.',
            'license.required' => 'La licencia de conducir es obligatorio.',
            'agency_id.required' => 'La agencia es obligatorio.',
            'address.required' => 'El dirección del personal es obligatorio.',
            'address.string' => 'El dirección del personal debe contener caracteres válidos.',
            'address.min' => 'La longitud del dirección del personal es muy corta.',
            'address.max' => 'La longitud del dirección del personal es muy larga.',
            'department_id.required' => 'El departamento del personal es obligatorio.',
            'province_id.required' => 'La provincia del personal es obligatorio.',
            'district_id.required' => 'El distrito del personal es obligatorio.',
            'curriculum.mimes' => 'El formato del curriculum vitae no es pdf.',
            'curriculum.max' => 'El curriculum vitae pesa demasiado solo debe pesar 2MB max.',
            'criminal_record.mimes' => 'El formato de antecedentes policiales no es pdf.',
            'criminal_record.max' => 'Los antecedentes policiales pesa demasiado solo debe pesar 2MB max.',
            'photo.image' => 'El tipo de archivo de la foto de personal es incorrecto.'
        ];
        //Save a employee
        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $employee = Employee::find($request->get('employee_id'));

            $employee->name = $request->get('name');
            $employee->father_name = $request->get('father_name');
            $employee->mother_name = $request->get('mother_name');
            $employee->dni = $request->get('dni');
            $employee->gender = $request->get('gender');
            $employee->birth_date = $request->get('birth_date');
            $employee->profession_id = $request->get('profession_id');
            $employee->email = $request->get('email');
            $employee->phone = $request->get('phone');
            $employee->family_burden = $request->get('family_burden');
            $employee->license = $request->get('license');
            $employee->agency_id = $request->get('agency_id');
            $employee->address = $request->get('address');
            $employee->reference = $request->get('reference');
            $employee->department_id = $request->get('department_id');
            $employee->province_id = $request->get('province_id');
            $employee->district_id = $request->get('district_id');

            //Si cambia carga familiar a que no tiene,elimino todos sus familiares
            if($employee->family_burden == 0){
                Relative::where('employee_id', $employee->id)->delete();
            }

            // TODO: Tratamiento de un archivo de forma tradicional
            if (!$request->file('photo')) {
                if ($employee->photo == 'employee.png' || $employee->photo == null) {
                    $employee->photo = 'employee.png';
                }
            } else {
                $path = public_path().'/images/employees/';
                $extension = $request->file('photo')->getClientOriginalExtension();
                $filename = $employee->id . '.' . $extension;
                $request->file('photo')->move($path, $filename);
                $employee->photo = $filename;
                //$employee->save();
            }
            // TODO: Tratamiento de un archivo de forma tradicional
            if (!$request->file('curriculum')) {
                if ($employee->curriculum == 'personal-sin-cv.pdf' || $employee->curriculum == null) {
                    $employee->curriculum = 'personal-sin-cv.pdf';
                }
            } else {
                $path = public_path().'/images/curriculums/';
                $extension = $request->file('curriculum')->getClientOriginalExtension();
                $filename = $employee->id . '.' . $extension;
                $request->file('curriculum')->move($path, $filename);
                $employee->curriculum = $filename;
                //$employee->save();
            }
            if (!$request->file('criminal_record')) {
                if ($employee->criminal_record == 'personal-sin-certificado-de-antecedentes-penales.pdf' || $employee->criminal_record == null) {
                    $employee->criminal_record = 'personal-sin-certificado-de-antecedentes-penales.pdf';
                }
                //$employee->save();
            } else {
                $path = public_path().'/images/criminal-record/';
                $extension = $request->file('criminal_record')->getClientOriginalExtension();
                $filename = $employee->id . '.' . $extension;
                $request->file('criminal_record')->move($path, $filename);
                $employee->criminal_record = $filename;
                //$employee->save();
            }
            $employee->save();
        }
        return response()->json($validator->messages(), 200);
    }

    // --------------------------- use softdelete ---------------------------
    public function destroy(Request $request)
    {
        $rules = [
            'id' => 'required|exists:employees,id',
        ];

        $messages = [
            'id.required' => 'No se ha recibido el identificador del empleado.',
            'id.exists' => 'El empleado no existe en la base de datos.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {

            $contractState = ContractState::find($request->get('id'));
            
            if (!empty($contractState->contract_id)) {
                $contract = Contract::find($contractState->contract_id);

                $contract->observation ="CONTRATO CANCELADO ANTES DE FINALIZAR FECHA ACORDADA" ;
                $contract->save();
            }
            
            $contractState->start_contract = '2000-01-01';
            $contractState->trial_period = '2000-01-02';
            $contractState->end_contract = '2000-01-03';
            $contractState->contract_id = null;
            $contractState->save();

            $employee = Employee::find($request->get('id'));
            $employee->delete();

        }

        return response()->json($validator->messages(), 200);
    }

    public function trashed()
    {
        $employees = Employee::onlyTrashed()->get();
        return view('employee.restore', compact('employees'));
    }

    public function restore( Request $request )
    {
        $rules = [
            'id' => 'required|exists:employees,id',
        ];

        $messages = [
            'id.required' => 'No se ha recibido el identificador del empleado.',
            'id.exists' => 'El empleado no existe en la base de datos.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $employee = Employee::onlyTrashed()->where('id', $request->get('id'))
                            ->restore();
        }

        return response()->json($validator->messages(), 200);
    }

    //-----------------------------------------------------------------

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


}