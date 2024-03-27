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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role_id')->default(2)->comment('1:admin,2:user,3:business');
            $table->string('avatar')->nullable();
            $table->date('birthday')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->unsignedBigInteger('eating_pref_id')->nullable();
            $table->unsignedBigInteger('nationality_id')->nullable();
            $table->unsignedBigInteger('residence_city_id')->nullable();
            $table->unsignedBigInteger('job_status_id')->nullable();
            $table->text('introduction')->nullable();
            $table->string('status')->default('active');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('eating_pref_id')->references('id')->on('eating_preferences');
            $table->foreign('nationality_id')->references('id')->on('countries');
            $table->foreign('residence_city_id')->references('id')->on('cities');
            $table->foreign('job_status_id')->references('id')->on('job_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
