<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = ['name_departamento'];

    public function provinces()
    {
        return $this->hasMany('App\Province');
    }
    /*
    public function registro_reclamos()
    {
        return $this->belongsToMany('App\models\RegistroReclamo');
    }*/
}
