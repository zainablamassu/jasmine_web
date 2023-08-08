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
        Schema::create('registerworks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); //
            $table->string('image')->nullable();// image
            $table->string('birthday')->nullable();
            $table->string('degree')->nullable();
            $table->string('college')->nullable();
            $table->string('year_graduate')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('address')->nullable();
            $table->integer('address_m')->nullable();
            $table->integer('address_z')->nullable();
            $table->integer('address_d')->nullable();
            $table->string('nearest_landmark')->nullable();
            $table->string('social_status')->nullable();
            $table->string('last_work')->nullable();
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
        Schema::dropIfExists('registerworks');
    }
};
