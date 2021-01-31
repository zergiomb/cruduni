<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('program_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            
            //foreign key program user and user program


            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

           

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
        Schema::dropIfExists('program_users');
    }
}
