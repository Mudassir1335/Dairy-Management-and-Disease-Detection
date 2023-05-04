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
        Schema::create('animal_record', function (Blueprint $table) {
            $table->id();
            $table->string('cow_code')->nullable();
            $table->string('breed')->nullable();
            $table->integer('weight')->nullable();
            $table->string('avg_milk')->nullable(); 
            $table->integer('purchase_price')->nullable();
            $table->string('with_calf')->nullable();
            $table->integer('age')->nullable();
            $table->string('milking_status')->nullable();
            $table->string('sex')->nullable();
            $table->text('disease_history')->nullable();
            $table->string('total_calf')->nullable();
            $table->date('death_date')->nullable();
            $table->text('calving_history')->nullable();
            $table->date('purchase_date')->nullable();
            $table->date('sale_date')->nullable();
            $table->date('expected_delivery_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_record');
    }
};
