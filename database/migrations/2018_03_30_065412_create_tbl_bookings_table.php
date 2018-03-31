<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_id');
            $table->date('checkindate');
            $table->date('checkoutdate');
            $table->string('city');
            $table->string('adult');
            $table->string('children');
            $table->string('days');
            $table->string('studio');
            $table->integer('tot_day');
            $table->string('summary');
            $table->integer('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *(`id`, `member_id`, `checkindate`, `checkoutdate`, `city`, `adult`, `children`, `days`, `studio`, `tot_day`, `summary`, `status`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_bookings');
    }
}
