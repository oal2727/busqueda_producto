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
        Schema::create('unidad_alquiler', function (Blueprint $table) {
            $table->id();
            $table->string("codigo");
            $table->string("tipo_ua");
            $table->string("marca");
            $table->string("procesador");
            $table->string("generacion");
            $table->unsignedBigInteger("clienteId");
            $table->foreign("clienteId")->references("id")->on("cliente");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidad_alquiler');
    }
};
