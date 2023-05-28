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
        Schema::create('symptom_disease_mappings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('symptom_id');
            $table->unsignedBigInteger('disease_id');
            $table->timestamps();

            $table->foreign('symptom_id')->references('id')->on('symptoms')->onDelete('cascade');
            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('symptom_disease_mappings');
    }
};
