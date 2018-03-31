<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_items', function (Blueprint $table) {
            $table->increments('itemId');
            $table->string('itemHeader');
            $table->string('itemSub');
            $table->string('itemDesc');
            $table->string('itemImage');
            $table->integer('isDeleted');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * `(`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_items');
    }
}
