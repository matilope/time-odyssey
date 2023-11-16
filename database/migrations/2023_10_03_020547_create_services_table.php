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
    Schema::create('services', function (Blueprint $table) {
      $table->id();
      $table->text('description');
      $table->string('image', 120)->nullable();
      $table->unsignedInteger('price');
      $table->unsignedInteger('duration');
      $table->unsignedInteger('lodging');
      $table->date('date_of_departure');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('services');
  }
};
