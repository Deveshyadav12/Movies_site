<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
   // database/migrations/2025_10_30_000002_create_movies_table.php
Schema::create('movies', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('category')->nullable();
    $table->string('poster')->nullable();
    $table->string('download_url')->nullable();
    $table->string('Description')->nullable();// NEW
    $table->timestamps();
});

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
