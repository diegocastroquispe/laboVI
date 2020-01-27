<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Detalle_Cita;
use Faker\Generator as Faker;

$factory->define(Detalle_Cita::class, function (Faker $faker) {
    return [
        'cita_id'=> rand(1,50),
        'date_of_birth'=>$faker->date($format='Y-m-d',$max='now'),
        'hora'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'tratamiento'=>$faker->sentence($nbWords=1,$variableNbWords=true),
    ];
});
