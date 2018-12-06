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
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->date('birth');
            $table->tinyInteger('gender');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('primary_address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->string('alt_address')->nullable();
            $table->string('alt_city')->nullable();
            $table->string('alt_state')->nullable();
            $table->string('alt_zip')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
