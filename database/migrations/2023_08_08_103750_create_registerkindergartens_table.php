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
        Schema::create('registerkindergartens', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); //
            $table->string('image')->nullable();// image
            $table->string('birthday')->nullable();
            $table->string('currentStage')->nullable();
            $table->integer('brotherNumbers')->nullable();
            $table->string('sequence')->nullable();
            $table->boolean('liveWithParents')->default(true);
            $table->string('reason')->nullable();
            $table->string('fathersStudy')->nullable();
            $table->string('fathersJob')->nullable();
            $table->string('mothersStudy')->nullable();
            $table->string('mothersJob')->nullable();
            $table->string('previouslyKindergartenName')->nullable();
            $table->string('reasonSchoolName')->nullable();
            $table->string('address')->nullable();
            $table->integer('locality')->nullable();
            $table->integer('alley')->nullable();
            $table->integer('house')->nullable();
            $table->string('nearestPoint')->nullable();
            $table->string('fatherPhone')->nullable();
            $table->string('motherPhone')->nullable();
            $table->boolean('is_allergic')->default(false);
            $table->string('allergic')->nullable();
            $table->string('diseases')->nullable();
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
        Schema::dropIfExists('registerkindergartens');
    }
};
