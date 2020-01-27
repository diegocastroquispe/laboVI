<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__citas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cita_id');
            $table->date('date_of_birth');
            $table->string('hora',50);
            $table->string('tratamiento',50);
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle__citas');
    }
}
