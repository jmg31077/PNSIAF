<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->int('code');
            $table->int('description');
            $table->int('auxliary_id');
            $table->int('user_id');
            $table->int('asset_id');
            $table->timestamps();
            $table->int('accound_id');
            $table->varchar('barcode');
            $table->int('state');
            $table->text('observation');
            $table->varchar('proceso');
            $table->varchar('observaciones');
            $table->numeric('precio');
            $table->varchar('detalle');
            $table->varchar('medidas');
            $table->varchar('material');
            $table->varchar('color');
            $table->varchar('marca');
            $table->varchar('modelo');
            $table->varchar('serie');
            $table->varchar('code_old');
            $table->int('ingreso_id');
            $table->int('ubicacion_id');
            $table->int('baja_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
