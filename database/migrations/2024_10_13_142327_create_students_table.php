<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('Student_name', 60);
            $table->bigInteger('roll', );
            $table->string('class', 70);
            $table->string('section', 70);
            $table->string('photo',250);
            //$table->string('password',90);
            $table->text('town', 50);
            $table->bigInteger('zip');
            $table->string('fathername', 70);
            $table->string('mothername', 70);
            $table->bigInteger('fatherphone', );
            $table->bigInteger('motherphone');
            $table->string('name', 60);
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
        Schema::dropIfExists('students');
    }
};
