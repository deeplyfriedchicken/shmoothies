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
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('image_url')->nullable();
            $table->string('description')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('tumblr')->nullable();
            $table->boolean('isVerified');
            $table->integer('isRoot')->unique();
            $table->rememberToken()->nullable();
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
        Schema::drop('users');
    }
}
