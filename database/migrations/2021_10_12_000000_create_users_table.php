<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

           /** $table->string('surname')->nulltable();
            *$table->string('code')->nulltable();
            *$table->string('nationality')->nulltable();
            *$table->string('city')->nulltable();
            *$table->string('direction')->nulltable();
            *$table->string('phone')->nulltable();
            */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname')->nulltable();
            $table->string('code')->nulltable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nationality')->nulltable();
            $table->string('city')->nulltable();
            $table->string('direction')->nulltable();
            $table->string('phone')->nulltable();

            $table->bigInteger('rol_id')->unsigned()->nullable();
            $table->bigInteger('campu_id')->unsigned()->nullable();
            $table->bigInteger('faculie_id')->unsigned()->nullable();
            //foreign key rols y campus
             $table->foreign('rol_id')->references('id')->on('rols');
             $table->foreign('campu_id')->references('id')->on('campus');
             $table->foreign('faculie_id')->references('id')->on('faculies');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
