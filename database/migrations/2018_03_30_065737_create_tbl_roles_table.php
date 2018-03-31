<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_roles', function (Blueprint $table) {
            $table->increments('roleId');
            $table->string('role');
            $table->string('assignSections');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`roleId`, `role`, `assignSections`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_roles');
    }
}
