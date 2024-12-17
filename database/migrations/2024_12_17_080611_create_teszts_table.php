<?php

use App\Models\Teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });

        Teszt::create([
            'kerdes'=>'A papír milyen színű szelektív kukába gyűjtjük?',
            'v1'=>'kék',
            'v2'=>'piros',
            'v3'=>'szürke',
            'v4'=>'sárga',
            'helyes'=>'v1',
            'kategoriaId'=>1,
        ]);
        Teszt::create([
            'kerdes'=>'Melyek komosztáljuk?',
            'v1'=>'kék',
            'v2'=>'piros',
            'v3'=>'szürke',
            'v4'=>'sárga',
            'helyes'=>'v1',
            'kategoriaId'=>1,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
