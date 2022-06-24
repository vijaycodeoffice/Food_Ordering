<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createhotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hotels', function (Blueprint $table) {
            $table->id();
            $table->string('langauge_id');
			$table->string('hotel_name');
			$table->string('hotel_code');
            $table->string('hotel_email');
            $table->string('hotel_address');
            $table->string('hotel_contact');
            $table->string('hotel_password');
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
        Schema::dropIfExists('Hotels');
    }
}
