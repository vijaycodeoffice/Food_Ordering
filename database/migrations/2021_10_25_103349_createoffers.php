<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createoffers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Offers', function (Blueprint $table) {
            $table->id();
			$table->string('langauge_id');
			$table->string('hotel_id');
            $table->string('offer_name');
            $table->string('offer_price');
            $table->string('offer_start_date');
            $table->string('offer_valid_date');
            $table->string('offer_conditions');
            $table->string('offer_image');
            $table->string('offer_description');
		
            $table->string('status');
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
        Schema::dropIfExists('offers');
    }
}
