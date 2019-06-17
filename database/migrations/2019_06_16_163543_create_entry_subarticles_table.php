<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrySubarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_subarticles', function (Blueprint $table) {
            $table->increments('id');
            $table->float('amount');
            $table->float('unit_cost');
            $table->numeric('total_cost');
            $table->varchar('invoice');
            $table->date('date');
            $table->int('subarticle_id');
            $table->timestamps();
            $table->int('stock');
            $table->int('note_entry_id');
            $table->int('invalidate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entry_subarticles');
    }
}
