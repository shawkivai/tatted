<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuburbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suburbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('state_id')->unsignedInteger();
            $table->unsignedBigInteger('postcode_id');
            $table->string('suburb_name');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();;
            $table->timestamps();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('postcode_id')->references('id')->on('postcodes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suburbs');
    }
}
