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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
           
            $table->string('name');
            $table->text('description');
            $table->integer('quantity');
            $table->double('price');
            $table->double('remise');
            $table->string('sku');
            $table->string('garanty');
            
            $table->string('specificity');
            $table->timestamps();


            $table->foreignId('category_level3_id')
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
        Schema::dropIfExists('products');
    }
};
