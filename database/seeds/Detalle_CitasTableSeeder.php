<?php

use Illuminate\Database\Seeder;

class Detalle_CitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Detalle_Cita::class,50)->create();
    }
}
