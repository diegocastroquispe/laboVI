<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable=[
        'nombre_completo'
    ];
    public function citas(){
        return $this->hasMany('App\Cita');
    }
    public function Reporte_Historials(){
        return $this->hasMany('App\Reporte_Historial');
    }
}
