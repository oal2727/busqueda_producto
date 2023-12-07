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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string("empresa");
            $table->string("sector");
            $table->string("tamaño");
            $table->unsignedBigInteger("asesorAtencionId");
            $table->foreign("asesorAtencionId")->references("id")->on("asesor");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
