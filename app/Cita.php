<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable=[
        'paciente_id','doctor_id','nombre_completo_paciente','nombre_completo_doctor','date_of_birth'
    ];
    public function Paciente(){
        return $this->belongsTo('App\Paciente');
    }
    public function Doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
