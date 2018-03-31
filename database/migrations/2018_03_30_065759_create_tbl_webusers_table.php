<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblWebusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_webusers', function (Blueprint $table) {
            $table->increments('id');
            $table->date('createDete');
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->string('password');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`id`, `createDete`, `name`, `email`, `phone`, `password`, `status`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_webusers');
    }
}
