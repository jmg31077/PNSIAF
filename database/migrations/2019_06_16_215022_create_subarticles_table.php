<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subarticles', function (Blueprint $table) {
            $table->increments('id');
            $table->int('code');
            $table->varchar('description');
            $table->varchar('unit');
            $table->varchar('status');
            $table->int('articles_id');
            $table->timestamps();
            $table->int('amount');
            $table->int('mininum');
            $table->varchar('barcode');
            $table->varchar('code_old');
            $table->int('incremento');
            $table->int('material_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subarticles');
    }
}
