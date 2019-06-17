<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('delivery_note_number');
            $table->date('delivery_note_date');
            $table->varchar('invoice_number');
            $table->date('invoice_date');
            $table->int('supplier_id');
            $table->timestamps();
            $table->numeric('total');
            $table->int('user_id');
            $table->date('note_entry_date');
            $table->int('invalidate');
            $table->varchar('message');
            $table->varchar('invoice_autorizacion');
            $table->varchar('c31');
            $table->int('nro_nota_ingreso');
            $table->numeric('subtotal');
            $table->numeric('descuento');
            $table->varchar('incremento_alfabetico');
            $table->varchar('observacion');
            $table->date('c31_fecha');
            $table->int('reingreso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('note_entries');
    }
}
