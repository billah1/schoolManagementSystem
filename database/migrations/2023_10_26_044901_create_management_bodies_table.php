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
        Schema::create('management_bodies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->date('dob')->nullable();
            $table->text('email')->nullable();
            $table->date('joining_date')->nullable();
            $table->text('education')->nullable();
            $table->text('serviceLife')->nullable();
            $table->text('socialActivities')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management_bodies');
    }
};
