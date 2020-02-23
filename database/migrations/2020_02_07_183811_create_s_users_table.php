<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_users', function (Blueprint $table) {
            $table->bigIncrements('sUsers_id');

            $table->char('sUsers_name', 50)->default('');
            $table->string('sUsers_email', 100)->nullable()->default('example@io.com');
            $table->string('sUsers_contact', 100)->nullable()->default('');
            $table->string('sUsers_address', 200)->nullable()->default('');
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
        Schema::dropIfExists('s_users');
    }
}
