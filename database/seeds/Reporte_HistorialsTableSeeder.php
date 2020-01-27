<?php

use Illuminate\Database\Seeder;

class Reporte_HistorialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Reporte_Historial::class,50)->create();
    }
}
