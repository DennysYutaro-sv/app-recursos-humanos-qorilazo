<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Employee;
use App\ContractState; 
use App\Area; 
use App\Insurance;
use App\Position; 
use App\Concept; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use Carbon\Carbon;

class ContractController extends Controller
{
    public function index()
    {

        $areas = Area::all();
        $insurances = Insurance::all();
        $positions = Position::all();
        $concepts = Concept::all();

        $ahora = Carbon::now();
        $contractStates = ContractState::whereDate('end_contract','<', $ahora)->get();
        return view('contract.index', compact('contractStates','areas','insurances','positions','concepts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rules = [
            'employee_id' => 'required|exists:employees,id',
            'start_contract' => 'required|date',
            'trial_period' => 'required',
            'end_contract' => 'required|date',
            'type' => 'required',
            'area_id' => 'required',
            'insurance_id' => 'required',
            'position_id' => 'required',
            'base_salary' => 'required|numeric',
            'concept_id' => 'required',
            'document' => 'mimes:pdf|max:2048'
        ];

        $messages = [
            'employee_id.required' => 'El id del personal es obligatorio.',
            'employee_id.exists' => 'El id del personal no existe en la base de datos.',
            'start_contract.required' => 'La fecha de inicio de contrato es obligatorio.',
            'start_contract.date' => 'La fecha no tiene formato correcto.',
            'trial_period.required' => 'El periodo de prueba es requerido si o no.',
            'end_contract.required' => 'La fecha final de contrato es obligatorio.',
            'end_contract.date' => 'La fecha no tiene formato correcto.',
            'type.required' => 'El tipo de contrato es requerido.',
            'area_id.required' => 'El area de contrato es requerido.',
            'insurance_id.required' => 'El seguro es requerido.',
            'position_id.required' => 'La posición del personal es obligatorio.',
            'base_salary.required' => 'El salario base del personal es obligatorio.',
            'base_salary.numeric' => 'El salario base no tiene formato correcto.',
            'concept_id.required' => 'Los conceptos fijos son obligatorios.',
            'document.mimes' => 'El formato del contrato no es pdf.',
            'document.max' => 'El contrato pesa demasiado solo debe pesar 2MB max.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $date_future = date("2000-01-02");
            if(($request->get('trial_period')) == '1'){
                $date_now = date($request->get('start_contract'));
                $date_future = strtotime('+90 day', strtotime($date_now));
                $date_future = date('Y-m-d', $date_future);
            }
            $contract = Contract::create([
                'employee_id' => $request->get('employee_id'),
                'start_contract' => $request->get('start_contract'),
                'trial_period' => $date_future,
                'end_contract' => $request->get('end_contract'),
                'terms' => $request->get('terms'),
                'type' => $request->get('type'),
                'area_id' => $request->get('area_id'),
                'insurance_id' => $request->get('insurance_id'),
                'position_id' => $request->get('position_id'),
                'base_salary' => $request->get('base_salary'),
                'observation' => 'NINGUNA',
                'concept_id' => $request->get('concept_id')
            ]);

            if (!$request->file('document')) {
                $contract->document = 'sin-contrato.pdf';
            } else {
                $path = public_path().'/images/contracts/';
                $extension = $request->file('document')->getClientOriginalExtension();
                $filename = $contract->id . '.' . $extension;
                $request->file('document')->move($path, $filename);
                $contract->document = $filename;
            }
            $contract->save();

            $contractState = ContractState::find($request->get('employee_id'));

            $contractState->start_contract = $request->get('start_contract');
            $contractState->trial_period = $date_future;
            $contractState->end_contract = $request->get('end_contract');
            $contractState->contract_id = $contract->id;

            $contractState->save();
        }
        return response()->json($validator->messages(), 200);
    }

    public function show($id)
    {
        $contract = ContractState::find($id);
        return view('contract.show', compact('contract'));
    }

    public function edit($id)
    {
        $contract = ContractState::find($id);
        $areas = Area::all();
        $insurances = Insurance::all();
        $positions = Position::all();
        $concepts = Concept::all();

        return view('contract.edit', compact('contract','insurances','positions','concepts','areas'));
    }

    public function update(Request $request)
    {
        $rules = [
            'employee_id' => 'required|exists:employees,id',
            'start_contract' => 'required|date',
            'trial_period' => 'required',
            'end_contract' => 'required|date',
            'type' => 'required',
            'area_id' => 'required',
            'insurance_id' => 'required',
            'position_id' => 'required',
            'base_salary' => 'required|numeric',
            'concept_id' => 'required',
            'document' => 'mimes:pdf|max:2048'
        ];

        $messages = [
            'employee_id.required' => 'El id del personal es obligatorio.',
            'employee_id.exists' => 'El id del personal no existe en la base de datos.',
            'start_contract.required' => 'La fecha de inicio de contrato es obligatorio.',
            'start_contract.date' => 'La fecha no tiene formato correcto.',
            'trial_period.required' => 'El periodo de prueba es requerido si o no.',
            'end_contract.required' => 'La fecha final de contrato es obligatorio.',
            'end_contract.date' => 'La fecha no tiene formato correcto.',
            'type.required' => 'El tipo de contrato es requerido.',
            'area_id.required' => 'El area de contrato es requerido.',
            'insurance_id.required' => 'El seguro es requerido.',
            'position_id.required' => 'La posición del personal es obligatorio.',
            'base_salary.required' => 'El salario base del personal es obligatorio.',
            'base_salary.numeric' => 'El salario base no tiene formato correcto.',
            'concept_id.required' => 'Los conceptos fijos son obligatorios.',
            'document.mimes' => 'El formato del contrato no es pdf.',
            'document.max' => 'El contrato pesa demasiado solo debe pesar 2MB max.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ( !$validator->fails() )
        {
            $date_future = date("2000-01-02");
            if(($request->get('trial_period')) == '1'){
                $date_now = date($request->get('start_contract'));
                $date_future = strtotime('+90 day', strtotime($date_now));
                $date_future = date('Y-m-d', $date_future);
            }
            else{
                if(($request->get('trial_period')) == '0'){
                    $date_future = date("2000-01-02");
                }
                else{
                    $date_future = date($request->get('trial_period'));
                }
            }
            $contract = Contract::find($request->get('contract_id'));

            $contract->employee_id = $request->get('employee_id');
            $contract->start_contract = $request->get('start_contract');
            $contract->trial_period = $date_future;
            $contract->end_contract = $request->get('end_contract');
            $contract->terms = $request->get('terms');
            $contract->type = $request->get('type');
            $contract->area_id = $request->get('area_id');
            $contract->insurance_id = $request->get('insurance_id');
            $contract->position_id = $request->get('position_id');
            $contract->base_salary = $request->get('base_salary');
            $contract->observation = 'NINGUNA';
            $contract->concept_id = $request->get('concept_id');

            if (!$request->file('document')) {
                if ($contract->document == 'sin-contrato.pdf' || $contract->document == null) {
                    $contract->document = 'sin-contrato.pdf';
                }
            } else {
                $path = public_path().'/images/contracts/';
                $extension = $request->file('document')->getClientOriginalExtension();
                $filename = $contract->id . '.' . $extension;
                $request->file('document')->move($path, $filename);
                $contract->document = $filename;
            }

            $contract->save();

            $contractState = ContractState::find($request->get('employee_id'));

            $contractState->start_contract = $request->get('start_contract');
            $contractState->trial_period = $date_future;
            $contractState->end_contract = $request->get('end_contract');
            $contractState->contract_id = $contract->id;

            $contractState->save();
        }
        return response()->json($validator->messages(), 200);
    }

    public function destroy(Contract $contract)
    {
        //
    }
}
