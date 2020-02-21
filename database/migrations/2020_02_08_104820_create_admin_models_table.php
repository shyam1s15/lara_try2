<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_models', function (Blueprint $table) {
            $table->bigIncrements('admin_id');
            $table->string('admin_name',30);
            $table->string('admin_contact',20)->nullable();
            $table->string('admin_mail',60)->unique();
            $table->text('admin_address')->nullable();
            $table->timestamps();

            // $table->foreign('admin_id')->references('hostel_id')
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
        Schema::dropIfExists('admin_models');
    }
}
