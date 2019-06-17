<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->int('admin_id');
            $table->int('user_id');
            $table->timestamps();
            $table->varchar('status');
            $table->timestamp('delivery_date');
            $table->int('invalidate');
            $table->varchar('message');
            $table->int('nro_solicitud');
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
        Schema::dropIfExists('requests');
    }
}
