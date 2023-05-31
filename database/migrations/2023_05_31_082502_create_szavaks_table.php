<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Szavak;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on('temas');
            $table->timestamps();
        });
        Szavak::create(['id'=>'1','angol'=>'Fat','magyar'=>'Dagi','temaId'=>'1']);
        Szavak::create(['id'=>'2','angol'=>'Nice','magyar'=>'Kedves','temaId'=>'1']);
        Szavak::create(['id'=>'3','angol'=>'Beautiful','magyar'=>'Szép','temaId'=>'1']);
        Szavak::create(['id'=>'4','angol'=>'Beer','magyar'=>'Sör','temaId'=>'2']);
        Szavak::create(['id'=>'5','angol'=>'Bear','magyar'=>'Medve','temaId'=>'2']);
        Szavak::create(['id'=>'6','angol'=>'Flower','magyar'=>'Virág','temaId'=>'2']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
