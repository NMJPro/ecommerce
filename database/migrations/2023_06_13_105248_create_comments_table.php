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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->foreignId('user_id')
                  ->constrained()
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
            $table->foreignId('product_id')
                  ->constrained()
                  ->onUpdate('restrict')
                  ->onDelete('restrict');
            $table->subject();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
