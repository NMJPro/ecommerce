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
        Schema::create('category_level2s', function (Blueprint $table) {
            $table->id(); 
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->timestamps();
            $table->foreignId('category_level1_id')
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
        Schema::dropIfExists('category_level2s');
    }
};
