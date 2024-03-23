<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->text('summary')->nullable();
            $table->longText('thumbnail')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('eating_pref_id')->nullable();
            $table->unsignedBigInteger('occasion_id')->nullable();
            $table->unsignedBigInteger('mealtype_id')->nullable();
            $table->string('prep_time')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('eating_pref_id')->references('id')->on('eating_preferences');
            $table->foreign('occasion_id')->references('id')->on('pref_occasions');
            $table->foreign('mealtype_id')->references('id')->on('mealtypes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
