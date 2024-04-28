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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id()->unique()->primary();
            $table->string('nombre');
            $table->string('estado')->nullable();
            $table->text('descripcion')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('responsable_id')->nullable(); // Definición de la columna responsable_id
            $table->foreign('responsable_id')->references('cedula')->on('users')->nullOnDelete(); // Clave foránea responsable_id
            $table->unsignedBigInteger('proyecto_id'); // Definición de la columna proyecto_id
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade'); // Clave foránea proyecto_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
