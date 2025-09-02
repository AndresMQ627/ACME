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
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyectos_id')->constrained('proyectos');
            $table->string('nombre_plano');
            $table->integer('numero_hoja');
            $table->integer('total_hojas');
            $table->date('fecha_actualizacion');
            $table->date('ultima_actualizacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planos');
    }
};
