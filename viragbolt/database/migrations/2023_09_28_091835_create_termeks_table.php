<?php

use App\Models\Termek;
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
        Schema::create('termeks', function (Blueprint $table) {
            $table->id('termek_id');            
            $table->integer('eladasi_ar');
            $table->foreignId('virag_id')->references('virag_id')->on('virags');
            $table->timestamps();
        });

        Termek::create([
            'termek_id' => 1
            ,'eladasi_ar' => 1000
            ,'virag_id' => 1
        ]);

        Termek::create([
            'termek_id' => 2
            ,'eladasi_ar' => 16000
            ,'virag_id' => 2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termeks');
    }
};
