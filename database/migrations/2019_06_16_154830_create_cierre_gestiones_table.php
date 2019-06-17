<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCierreGestionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cierre_gestiones', function (Blueprint $table) {
            $table->increments('id');
            $table->numeric('actualizacion_gestion');
            $table->numeric('depreciacion_gestion');
            $table->numeric('indice_ufv');
            $table->int('asset_id');
            $table->int('gestion_id');
            $table->timestamps();
            $table->date('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cierre_gestiones');
    }
}
