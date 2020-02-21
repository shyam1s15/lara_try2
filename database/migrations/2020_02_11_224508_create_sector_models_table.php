<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector_models', function (Blueprint $table) {
            $table->bigIncrements('sector_id');
            $table->string('sector_name', 30)->nullable()->default('');
            $table->string('sector_location', 200)->nullable()->default('');

            $table->timestamps();
            $table->foreign('sector_id')->references('hostel_id')
            ->on('hostel_information_models')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sector_models');
    }
}
