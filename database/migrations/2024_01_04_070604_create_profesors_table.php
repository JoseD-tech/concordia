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
        Schema::create('profesors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula');
            $table->string('correo');
            $table->string('telefono');
            $table->date('fecha_nacimiento');
            // Relacion de profesor para saber de que sede es.
            $table->unsignedBigInteger('profesor_sede');
            $table->foreign('profesor_sede')->references("id")->on('sedes');
            // Relacion de profesor para saber de que estado es.
            $table->unsignedBigInteger('estado_sede');
            $table->foreign('estado_sede')->references("id")->on('estados');
            // Relacion de profesor para saber de que municipio es.
            $table->unsignedBigInteger('municipio_sede');
            $table->foreign('municipio_sede')->references("id")->on('municipios');
            // Relacion de profesor para saber de que parroquia es.
            $table->unsignedBigInteger('parroquia_sede');
            $table->foreign('parroquia_sede')->references("id")->on('parroquias');






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesors');
    }
};
