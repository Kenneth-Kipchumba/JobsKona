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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('phone_1')->unique()->nullable();
            $table->string('phone_2')->unique()->nullable();
            $table->string('another_email')->unique()->nullable();
            $table->mediumText('address')->nullable();
            $table->string('website')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('github')->nullable();
            $table->string('twitter')->nullable();
            $table->string('languages_spoken')->nullable();
            $table->string('languages_written')->nullable();
            $table->mediumText('biography')->nullable();
            $table->mediumText('academic_achievement_1')->nullable();
            $table->mediumText('academic_achievement_2')->nullable();
            $table->mediumText('academic_achievement_3')->nullable();
            $table->mediumText('academic_achievement_4')->nullable();
            $table->mediumText('academic_achievement_5')->nullable();
            $table->mediumText('professional_achievement_1')->nullable();
            $table->mediumText('professional_achievement_2')->nullable();
            $table->mediumText('professional_achievement_3')->nullable();
            $table->mediumText('professional_achievement_4')->nullable();
            $table->mediumText('professional_achievement_5')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
