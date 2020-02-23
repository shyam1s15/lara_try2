<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FoodZoneSectors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_zone_sectors', function (Blueprint $table) {
            $table->bigIncrements('sector_id');
            // $table->foreign('sector_id')->references('mall_id')
            // ->on('food_zone_models')->onDelete('cascade');

            $table->string('sector_name',40)->default('Sweat Feast');
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
        Schema::dropIfExists('food_zone_sectors');
    }
}
