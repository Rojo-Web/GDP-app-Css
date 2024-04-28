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
        Schema::create('usuario_proyecto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id')->nullable()->constrained('proyectos')->cascadeOnUpdate()->onDelete('cascade');
            $table->string('user_id')->nullable(); // Definición de la columna responsable_id
            $table->foreign('user_id')->references('cedula')->on('users')->nullOnDelete(); // Clave foránea responsable_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_proyecto');
    }
};
