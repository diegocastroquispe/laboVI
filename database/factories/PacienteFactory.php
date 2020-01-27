<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {
    return [
        'nombre_completo'=>$faker->unique()->word,
        'date_of_birth'=>$faker->date($format='Y-m-d',$max='now'),
        'direccion'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'motivo_consulta'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'antecedentes'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'alergias'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'telefono'=>$faker->sentence($nbWords=1,$variableNbWords=true),

    ];
});
