<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createitems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Items', function (Blueprint $table) {
            $table->id();
			$table->string('langauge_id');
			$table->string('hotel_id');
            $table->string('menu_id');
            $table->string('item_name');
            $table->string('item_price');
            $table->string('item_type');
            $table->string('addons');
            $table->string('is_popular');
            $table->string('item_image');
            $table->string('item_description');
		
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
        Schema::dropIfExists('Items');
    }
}
