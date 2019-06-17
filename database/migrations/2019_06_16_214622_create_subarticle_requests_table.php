<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubarticleRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subarticle_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->int('subarticle_id');
            $table->int('request_id');
            $table->int('amount');
            $table->int('amount_delivered');
            $table->int('total_delivered');
            $table->int('invalidate');
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
        Schema::dropIfExists('subarticle_requests');
    }
}
