<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAdminSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`id`, `name`, `status`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admin_sections');
    }
}
