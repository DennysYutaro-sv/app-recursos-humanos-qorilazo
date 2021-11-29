<?php

namespace App\Http\Controllers;

use App\ContractState;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

use App\Area; 
use App\Insurance;
use App\Position; 
use App\Concept; 
use App\Contract;

class ContractStateController extends Controller
{
    public function current()
    {
        $areas = Area::all();
        $insurances = Insurance::all();
        $positions = Position::all();
        $concepts = Concept::all();
        //Personal con contrato vigente
        $ahora = Carbon::now();
        $currentContracts= ContractState::whereDate('end_contract','>=', $ahora)->get();
        return view('contract.current', compact('currentContracts','areas','insurances','positions','concepts'));
    }

    public function proof()
    {
        //Personal en periodo de prueba
        $ahora = Carbon::now();
        $proofContracts = ContractState::whereDate('trial_period','>=', $ahora)->get();
        return view('contract.proof', compact('proofContracts'));
    }

    public function destroy(Request $request)
    {
        $rules = [
            'employee_id' => 'required|exists:employees,id',
        ];

        $messages = [
            'employee_id.required' => 'No se ha recibido el identificador del empleado.',
            'employee_id.exists' => 'El empleado no existe en la base de datos.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {

            $contractState = ContractState::find($request->get('employee_id'));

            $contract = Contract::find($contractState->contract_id);

            $contract->observation ="CONTRATO CANCELADO ANTES DE FINALIZAR FECHA ACORDADA" ;
            $contract->save();
            
            $contractState->start_contract = '2000-01-01';
            $contractState->trial_period = '2000-01-02';
            $contractState->end_contract = '2000-01-03';
            $contractState->contract_id = null;
            $contractState->save();

        }

        return response()->json($validator->messages(), 200);
    }
}
