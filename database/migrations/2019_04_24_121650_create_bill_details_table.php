<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->bigIncrements('bill_deID');
            $table->integer('price');
            $table->integer('quantity');
            $table->float('distance',8,2);
            $table->string('begin_journey',255);
            $table->string('end_journey',255);
            $table->unsignedBigInteger('billID');
            $table->foreign('billID')->references('billID')->on('bills');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_details');
    }
}
