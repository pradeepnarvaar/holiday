<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admin_id');
            $table->string('site_name');
            $table->string('admin_amount');
            $table->integer('amc_amount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`id`, `admin_id`, `site_name`, `admin_amount`, `amc_amount`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admins');
    }
}
