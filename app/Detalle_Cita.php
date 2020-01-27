<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Cita extends Model
{
    protected $fillable=[
        'cita_id','date_of_birth','hora','tratamiento'
    ];
    public function Cita(){
        return $this->belongsTo('App\Cita');
    }
    
}
