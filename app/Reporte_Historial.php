<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte_Historial extends Model
{
    protected $fillable=[
        'paciente_id','doctor_id','piezas_tratadas','piezas_a_tratar','date_of_birth','diagnostico'
    ];
    public function Paciente(){
        return $this->belongsTo('App\Paciente');
    }
    public function Doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
