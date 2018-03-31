<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMemberleadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_memberleads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('memberID');
            $table->string('leadID');
            $table->integer('leadAmount');
            $table->date('buyDate');
            $table->date('expDate');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * (`id`, `memberID`, `leadID`, `leadAmount`, `buyDate`, `expDate`)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_memberleads');
    }
}
