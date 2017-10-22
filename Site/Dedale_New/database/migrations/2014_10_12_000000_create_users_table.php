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
            $table->string('image')->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->date('birthday');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('password');
            $table->tinyInteger('gender')->unsigned(); // 0-none 1-male 2-femalle
            $table->tinyInteger('type')->unsigned(); // 0-user 1-admin 2-pro
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
