<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cita;
use Faker\Generator as Faker;

$factory->define(Cita::class, function (Faker $faker) {
    return [
        'paciente_id'=> rand(1,50),
        'doctor_id'=> rand(1,50),
        'nombre_completo_paciente'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'nombre_completo_doctor'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'date_of_birth'=>$faker->date($format='Y-m-d',$max='now'),

    ];
});
