<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReporteHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte__historials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id');
            $table->unsignedInteger('doctor_id');
            $table->string('piezas_tratadas',50);
            $table->string('piezas_a_tratar',50);
            $table->date('date_of_birth');
            $table->string('diagnostico',50);
            $table->timestamps();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporte__historials');
    }
}
