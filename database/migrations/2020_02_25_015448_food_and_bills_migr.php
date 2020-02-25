<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FoodAndBillsMigr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('combo', function (Blueprint $table) {
            $table->bigIncrements('combo_id');
            $table->string('c_stu_id', 30)->nullable()->default('');
            $table->string('c_rm_id', 30)->nullable()->default('');
            $table->timestamps();
            // $table->foreign('sector_id')->references('hostel_id')
            // ->on('hostel_information_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
