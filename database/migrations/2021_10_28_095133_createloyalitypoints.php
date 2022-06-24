<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createloyalitypoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Loyalitypoints', function (Blueprint $table) {
            $table->id();
			$table->string('hotel_id');
            $table->string('earning_point');
            $table->string('earning_point_value');
            $table->string('redeeming_point');
            $table->string('redeeming_point_value');
            $table->string('reward_point_for_registration');
            $table->string('reward_point_for_review');
            $table->string('reward_point_for_fristorder');
            $table->string('reward_point_for_sharingapp');
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
        Schema::dropIfExists('loyalitypoints');
    }
}
