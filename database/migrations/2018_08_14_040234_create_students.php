<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('students', function( Blueprint $table ){
            $table->increments('id');
            $table->string('label', 100)->nullable();;
            $table->string('name', 100);
            $table->string('login')->unique();
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('students');

    }
}
