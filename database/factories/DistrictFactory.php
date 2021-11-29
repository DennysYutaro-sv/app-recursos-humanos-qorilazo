<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $fillable = ['name_distrito','cod_ubig','id_provincia'];

    public function provinces()
    {
      return $this->belongsTo('App\Province');
    }
    /*
    public function registro_reclamos()
    {
      return $this->belongsToMany('App\models\RegistroReclamo');
    }
    */
}