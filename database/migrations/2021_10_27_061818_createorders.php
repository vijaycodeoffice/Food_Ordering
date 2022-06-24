<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createorders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orders', function (Blueprint $table) {
            $table->id();
			
			$table->string('hotel_id');
            $table->string('order_invoice');
            $table->string('customer_name');
            $table->string('email');
            $table->string('phone');
            $table->string('gross_amount');
            $table->string('discount');
            $table->string('net_amount');
            $table->string('is_point_redeem');
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
        Schema::dropIfExists('orders');
    }
}
