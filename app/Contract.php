<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{

    protected $fillable = [
        'employee_id',
        'start_contract',
        'trial_period',
        'end_contract',
        'terms',
        'type',
        'area_id',
        'insurance_id',
        'position_id',
        'base_salary',
        'observation',
        'concept_id',
        'document'
    ];
    protected $dates = ['delete_at'];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
    public function insurance()
    {
        return $this->belongsTo('App\Insurance');
    }
    public function position()
    {
        return $this->belongsTo('App\Position');
    }
    public function concept()
    {
        return $this->belongsTo('App\Concept');
    }
}
