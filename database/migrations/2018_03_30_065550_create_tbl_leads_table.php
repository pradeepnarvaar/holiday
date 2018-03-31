<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_leads', function (Blueprint $table) {
            $table->increments('id');
            $table->date('createDate');
            $table->string('title');
            $table->string('content');
            $table->integer('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *(`id`, `createDate`, `title`, `content`, `status`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_leads');
    }
}
