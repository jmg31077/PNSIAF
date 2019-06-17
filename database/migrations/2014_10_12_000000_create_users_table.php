<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('email');
            $table->varchar('encrypted_password')->unique();
            $table->varchar('reset_password_token');
            $table->timestamp('reset_password_sent_at');
            $table->timestamp('remember_created_at');
            $table->int('sign_in_count');
            $table->timestamp('current_sign_in_at');
            $table->timestamp('last_sign_in_at');
            $table->varchar('current_sign_in_ip');
            $table->varchar('last_sign_in_ip');
            $table->timestamps();
            $table->varchar('username');
            $table->int('code');
            $table->varchar('name');
            $table->varchar('title');
            $table->varchar('ci');
            $table->varchar('phone');
            $table->varchar('mobile');
            $table->varchar('status');
            $table->int('departament_id');
            $table->varchar('role');
            $table->int('password_change');
            $table->int('assets_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
