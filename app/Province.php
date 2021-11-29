<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $fillable = ['name_provincia','cod_ubig','id_departamento'];

    public function departments()
    {
        return $this->belongsTo('App\Department');
    }
    public function districts()
    {
        return $this->hasMany('App\District');
    }
    /*
    public function registro_reclamos()
    {
        return $this->belongsToMany('App\models\RegistroReclamo');
    }
    */
}