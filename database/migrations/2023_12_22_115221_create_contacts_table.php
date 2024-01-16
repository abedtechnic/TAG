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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            // $table->string('title');
            // $table->text('descriptiontitle');
            // $table->string('titleone');
            // $table->text('descriptionone');
            // $table->string('titletow');
            // $table->text('descriptiontow');
            // $table->string('titlethree');
            // $table->text('descriptionthree');
            // $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
