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
        Schema::create('emission_documents', function (Blueprint $table) {
            $table->id();
            $table->string('title', 700);
            $table->text('description')->nullable();
            $table->string('file', 700);
            $table->integer('sort_order')->default(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emission_documents');
    }
};
