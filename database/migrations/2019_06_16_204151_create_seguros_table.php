<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSegurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguros', function (Blueprint $table) {
            $table->increments('id');
            $table->int('supplier_id');
            $table->int('user_id');
            $table->varchar('numero_poliza');
            $table->varchar('numero_contrato');
            $table->varchar('factura_numero');
            $table->varchar('factura_autorizacion');
            $table->date('factura_fecha');
            $table->float('factura_monto');
            $table->timestamps('fecha_inicio_vigencia');
            $table->timestamps('fecha_fin_vigencia');
            $table->int('baja_logica');
            $table->timestamps();
            $table->int('seguro_id');
            $table->varchar('state');
            $table->varchar('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguros');
    }
}
