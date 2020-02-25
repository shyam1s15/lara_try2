<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_models', function (Blueprint $table) {
            $table->bigIncrements('stu_id');
            
            // $table->foreign('stu_id')->references('room_id')
            // ->on('room_models')->onDelete('cascade');
            
            $table->string('stu_er', 30);
            
            $table->string('stu_name', 100)->nullable()->default('');
            $table->string('stu_mother', 100)->nullable()->default('');
            $table->date('stu_dob')->nullable();
            $table->char('stu_gender', 5)->default('none');
            $table->char('stu_bloodGrp', 10)->default('none');
            $table->char('stu_mob', 10)->default('none');
            $table->char('stu_mob2', 10)->default('none');
            $table->string('stu_email', 40)->nullable()->default('');
            $table->string('stu_address', 200)->nullable()->default('none');
            
            $table->string('stu_institute', 100)->nullable()->default('');
            $table->char('stu_branch', 40)->default('');
            $table->char('stu_insCode', 10)->default('');
            $table->char('stu_sem', 4)->default('');
            $table->char('allocated', 5)->default('0');
                        
            // $table->foreign('stu_id')->references('hostel_id')
            // ->on('hostel_information_models')->onDelete('cascade');
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
        Schema::dropIfExists('students_models');
    }
}
