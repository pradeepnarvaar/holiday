<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('review');
            $table->string('name');
            $table->string('rdate');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *`(`id`, `review`, `name`, `rdate`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_feedbacks');
    }
}
