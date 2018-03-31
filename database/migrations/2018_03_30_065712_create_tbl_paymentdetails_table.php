<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPaymentdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_paymentdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('member_id');
            $table->string('txnID');
            $table->string('email')->unquie();
            $table->integer('mobile');
            $table->string('dsa_assigned');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`id`, `name`, `member_id`, `txnID`, `email`, `mobile`, `dsa_assigned`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_paymentdetails');
    }
}
