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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->float('value', 10, 2);
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->bigInteger('sale_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete("CASCADE");            
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete("CASCADE");            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
