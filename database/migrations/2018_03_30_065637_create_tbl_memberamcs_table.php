<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMemberamcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_memberamcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('txn_id');
            $table->string('member_id');
            $table->string('payType');
            $table->integer('amc_amount');
            $table->date('paydate');
            $table->integer('paid');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * `(`id`, `txn_id`, `member_id`, `payType`, `amc_amount`, `paydate`, `paid`) 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_memberamcs');
    }
}
