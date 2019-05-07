<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('vehicleID');
            $table->string('brand',255);
            $table->unsignedBigInteger('partID');
            $table->foreign('partID')->references('partID')->on('partners');
            $table->string('description',255);
            $table->unsignedBigInteger('type_vehicleID');
            $table->foreign('type_vehicleID')->references('type_vehicleID')->on('type_vehicles');
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
        Schema::dropIfExists('vehicles');
    }
}
