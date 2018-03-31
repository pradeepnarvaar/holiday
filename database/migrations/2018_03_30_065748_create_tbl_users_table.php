<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->increments('userId');
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->integer('mobile');
            $table->string('roleId');
            $table->string('locID');
            $table->string('isDeleted');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `locID`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_users');
    }
}
