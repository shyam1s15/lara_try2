<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelInformationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_information_models', function (Blueprint $table) {
            $table->bigIncrements('hostel_id');

            // $table->foreign('hostel_id')->references('sUsers_id')
            // ->on('s_users')->onDelete('cascade');

            $table->string('hostel_name',60)->default('Easy Hostels');
            $table->text('hostel_address')->nullable();
            $table->string('category',30)->nullable();
            $table->text('description')->nullable();
            $table->string('hostel_contact',30)->nullable();
            $table->string('hostel_mail',60)->nullable();
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
        Schema::dropIfExists('hostel_information_models');
    }
}
