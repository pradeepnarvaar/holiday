<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMamberpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_mamberpayments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('txnID');
            $table->string('member_id');
            $table->string('payType');
            $table->integer('creaditBalance');
            $table->date('payDate');
            $table->integer('paid');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`id`, `txnID`, `member_id`, `payType`, `creaditBalance`, `payDate`, `paid`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_mamberpayments');
    }
}
