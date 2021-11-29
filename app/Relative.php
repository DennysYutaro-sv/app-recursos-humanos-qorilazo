<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    //
    protected $fillable = ['employee_id',
                'name',
                'father_name',
                'mother_name',
                'dni','relationship',
                'birth_date','document'
            ];

    public function employees()
    {
        return $this->belongsTo('App\Employee');
    }
}
