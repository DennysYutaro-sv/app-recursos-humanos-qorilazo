<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //
    protected $fillable = ['id','agency_name','agency_address','departamento_id','provincia_id','distrito_id'];

    public function departamento()
    {
        return $this->belongsTo('App\Department');
    }

    public function provincia()
    {
        return $this->belongsTo('App\Province');
    }

    public function distrito()
    {
        return $this->belongsTo('App\District');
    }
    /*
    public function registro_reclamos()
    {
        return $this->belongsToMany('App\models\RegistroReclamo');
    }*/
}
