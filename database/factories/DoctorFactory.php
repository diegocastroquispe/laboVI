<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {
    return [
        'nombre_completo'=>$faker->unique()->word,
        'especialidad'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'direccion'=>$faker->sentence($nbWords=1,$variableNbWords=true),
        'telefono'=>$faker->sentence($nbWords=1,$variableNbWords=true),
    ];
});
