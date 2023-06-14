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
        Schema::create('milk_record', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('cow_code')->nullable();
            $table->integer('morning')->nullable();
            $table->integer('evening')->nullable();
            $table->integer('total')->nullable();
            $table->string('reason')->nullable();
            $table->integer('today_rate')->nullable();
            $table->integer('total_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milk_record');
    }
};
