<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerschools', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable(); //
            $table->string('student_image')->nullable();// image
            $table->string('student_birthday')->nullable();
            $table->string('student_class')->nullable();
            $table->integer('student_brother_number')->nullable();
            $table->string('student_brother_rank')->nullable();
            $table->boolean('is_staying_with_his_fathers')->default(true);
            $table->string('student_staying_with')->nullable();
            $table->string('father_degree')->nullable();
            $table->string('father_jop')->nullable();
            $table->string('mother_degree')->nullable();
            $table->string('mother_jop')->nullable();
            $table->string('past_Kindergarten')->nullable();
            $table->string('school_name')->nullable();
            $table->string('past_school_reason')->nullable();
            $table->string('address')->nullable();
            $table->integer('address_m')->nullable();
            $table->integer('address_z')->nullable();
            $table->integer('address_d')->nullable();
            $table->string('nearest_landmark')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_phone')->nullable();
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
        Schema::dropIfExists('registerschools');
    }
};
