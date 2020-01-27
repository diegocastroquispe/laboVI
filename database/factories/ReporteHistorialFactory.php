<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reporte_Historial;
use Faker\Generator as Faker;

$factory->define(Reporte_Historial::class, function (Faker $faker) {
    return [
        'paciente_id'=> rand(1,50),
        'doctor_id'=> rand(1,50),
        'piezas_tratadas'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'piezas_a_tratar'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'date_of_birth'=>$faker->date($format='Y-m-d',$max='now'),
        'diagnostico'=>$faker->sentence($nbWords=1,$variableNbWords=true),

    ];
});
