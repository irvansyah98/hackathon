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
            $table->string('fullname')->nullable();
            $table->string('email', 50)->unique();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->string('no_telp')->nullable();
            $table->enum('role', array('admin', 'member'))->default('member');
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
