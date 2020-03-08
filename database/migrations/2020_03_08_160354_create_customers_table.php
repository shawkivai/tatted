<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('postcode_id');
            $table->unsignedBigInteger('suburb_id');
            $table->STRING('name');
            $table->STRING('email');
            $table->STRING('tattoo_type');
            $table->DOUBLE('tattoo_length',8, 2);
            $table->DOUBLE('tattoo_width',8, 2);
            $table->STRING('tattoo_color');
            $table->STRING('skin_type');
            $table->STRING('tattoo_age');
            $table->TEXT('tattoo_description')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
