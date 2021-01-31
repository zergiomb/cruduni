<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaculiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculies', function (Blueprint $table) {
            $table->id();
            $table->string('facultyname');
            $table->string('facultydes');
            

            $table->unsignedBigInteger('campus_id')->nullable();
            //foreign key campus
    $table->foreign('campus_id')->references('id')->on('campus');


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
        Schema::dropIfExists('faculies');
    }
}
