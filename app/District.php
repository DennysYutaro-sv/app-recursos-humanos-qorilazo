<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $fillable = ['name_distrito','cod_ubig','id_provincia'];

    public function provincias()
    {
      return $this->belongsTo('App\models\Provincia');
    }

    public function registro_reclamos()
    {
      return $this->belongsToMany('App\models\RegistroReclamo');
    }
}
