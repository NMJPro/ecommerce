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
        Schema::create('cart_product', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->timestamps();
            $table->foreignId('product_id')     
           ->constrained()         
           ->onUpdate('cascade')     
            ->onDelete('cascade');
       
           $table->foreignId('cart_id') 
           ->constrained()         
          ->onUpdate('cascade')       
           ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_product');
    }
};
