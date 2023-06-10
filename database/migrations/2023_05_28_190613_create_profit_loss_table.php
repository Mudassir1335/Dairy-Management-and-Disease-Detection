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
        Schema::create('profit_loss', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('total_revenue', 10, 2);
            $table->decimal('total_expenses', 10, 2);
            $table->decimal('gross_profit', 10, 2);
            $table->decimal('other_income', 10, 2)->nullable();
            $table->decimal('other_expenses', 10, 2)->nullable();
            $table->decimal('net_profit', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profit_loss');
    }
};
