<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locationName');
             $table->string('parent_id');
              $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`id`, `locationName`, `parent_id`, `status`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_locations');
    }
}
