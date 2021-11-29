<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    protected $fillable = 
        [
            'name',
            'father_name',
            'mother_name',
            'dni',
            'gender',
            'birth_date',
            'profession_id',
            'email',
            'phone',
            'family_burden',
            'license',
            'agency_id',
            'address',
            'reference',
            'department_id',
            'province_id',
            'district_id',
            'curriculum',
            'criminal_record',
            'photo'
        ];
    protected $dates = ['delete_at'];

    public function agency()
    {
        return $this->belongsTo('App\Agency');
    }
    public function profession()
    {
        return $this->belongsTo('App\Profession');
    }
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
    public function province()
    {
        return $this->belongsTo('App\Province');
    }
    public function district()
    {
        return $this->belongsTo('App\District');
    }
}
