<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodZoneModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_zone_models', function (Blueprint $table) {
            $table->bigIncrements('mall_id');
            $table->foreign('mall_id')->references('hostel_id')
            ->on('hostel_information_models')->onDelete('cascade');
            
            $table->string('mall_name',80)->default('Cruchy FOod Mall');
            $table->text('mall_sector')->nullable();
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
        Schema::dropIfExists('food_zone_models');
    }
}
