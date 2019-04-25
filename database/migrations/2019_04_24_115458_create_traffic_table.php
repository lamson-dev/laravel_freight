<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrafficTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffics', function (Blueprint $table) {
            $table->bigIncrements('traffID');
            $table->string('brand',255);
            $table->unsignedBigInteger('partID');
            $table->foreign('partID')->references('partID')->on('partners');
            $table->string('description',255);
            $table->unsignedBigInteger('type_traffID');
            $table->foreign('type_traffID')->references('type_traffID')->on('type_traffics');
            $table->string('image',255);
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
        Schema::dropIfExists('traffic');
    }
}
