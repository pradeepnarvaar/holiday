<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftvouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giftvouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voucher_code');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('mobno');
            $table->string('address');
            $table->string('dsaId');
            $table->string('dsaName');
            $table->date('date_of_generation');
            $table->time('time');
            $table->date('expiration_date');
            $table->string('location_id');
            
            $table->timestamps();
        });
    }

    /**
    *`id`, `voucher_code`, `name`, `email`, `mobno`, `address`, `dsa_id`, `dsa_name`, `date_of_generation`, `time`, `expiration_date`, `location_id
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giftvouchers');
    }
}
