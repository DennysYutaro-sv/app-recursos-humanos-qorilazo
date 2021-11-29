<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractState extends Model
{
    //
    protected  $primaryKey = 'employee_id';
    protected $fillable = ['start_contract','trial_period','end_contract','contract_id','employee_id'];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }
}
