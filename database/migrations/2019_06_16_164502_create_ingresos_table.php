<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->int('numero');
            $table->date('nota_entrega_fecha');
            $table->varchar('factura_numero');
            $table->varchar('factura_autorizacion');
            $table->date('factura_fecha');
            $table->int('supplier_id');
            $table->varchar('c31_numero');
            $table->int('baja_logica');
            $table->numeric('total');
            $table->timestamps();
            $table->varchar('nota_entrega_numero');
            $table->date('c31_fecha');
            $table->int('user_id');
            $table->varchar('incremento_alfabetico');
            $table->varchar('observacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
}
