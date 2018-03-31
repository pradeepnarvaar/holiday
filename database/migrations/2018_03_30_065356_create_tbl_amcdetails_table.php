<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAmcdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_amcdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('txn_id');
            $table->string('member_id');
            $table->string('name');
            $table->string('email');
            $table->integer('mobile');
            $table->date('year');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`id`, `txn_id`, `member_id`, `name`, `email`, `mobile`, `year`) 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_amcdetails');
    }
}
