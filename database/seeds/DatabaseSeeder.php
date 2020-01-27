<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PacientesTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(CitasTableSeeder::class);
        $this->call(Detalle_CitasTableSeeder::class);
        $this->call(Reporte_HistorialsTableSeeder::class);

    }
}
