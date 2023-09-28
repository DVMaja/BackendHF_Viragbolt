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
        Schema::create('virags', function (Blueprint $table) {
            $table->id('virag_id');
            $table->string('neve', 32);            
            $table->foreignId('tipus')->references('tipus_id')->on('tipuses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('virags');
    }
};
