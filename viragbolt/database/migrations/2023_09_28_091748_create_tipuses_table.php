<?php

use App\Models\Tipus;
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
        Schema::create('tipuses', function (Blueprint $table) {
            $table->id('tipus_id');
            $table->string('neve', 32);
            $table->string('leiras', 150);
            $table->timestamps();
        });

        Tipus::create([
            'tipus_id' => 1
            ,'neve' => 'cserepes virág'
            ,'leiras' => 'Cserépben lévő virágok'
        ]);

        Tipus::create([
            'tipus_id' => 2
            ,'neve' => 'évelő virágok'
            ,'leiras' => 'minden évben hoznak virágot'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipuses');
    }
};
