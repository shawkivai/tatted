<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customeres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('postcode_id');
            $table->unsignedBigInteger('suburb_id');
            $table->string('name');
            $table->string('email');
            $table->string('tattoo_type');
            $table->double('tatoo_length',8, 2);
            $table->double('tatoo_width',8, 2);
            $table->string('tattoo_color');
            $table->string('skin_type');
            $table->string('tattoo_age');
            $table->text('tattoo_description')->nullable();
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
        Schema::dropIfExists('customeres');
    }
}
