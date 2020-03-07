<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('company_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address', 300)->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id')
                ->references('id')
                ->on('states')
                ->onDelete('set null');
            $table->unsignedBigInteger('postcode_id')->nullable();
            $table->foreign('postcode_id')
                ->references('id')
                ->on('postcodes')
                ->onDelete('set null');
            $table->unsignedBigInteger('suburb_id')->nullable();

            $table->foreign('suburb_id')
                ->references('id')
                ->on('suburbs')
                ->onDelete('set null');
            $table->enum('service_type', ['tatoo_removal', 'tatoo_design'])->nullable();
            $table->string('phone_no', 30)->nullable();
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
        Schema::dropIfExists('companies');
    }
}
