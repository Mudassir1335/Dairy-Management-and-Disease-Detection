<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('manage_sale', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            
            $table->string('first_name');
            $table->string('last_name');
            $table->string('city');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
           
            $table->string('product_name');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_sale');
    }
};
