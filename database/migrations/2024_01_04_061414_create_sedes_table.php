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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_institucion');

            $table->unsignedBigInteger('estado_sede');
            $table->foreign('estado_sede')->references("id")->on('estados');

            $table->unsignedBigInteger('municipio_sede');
            $table->foreign('municipio_sede')->references("id")->on('municipios');

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
        Schema::dropIfExists('sedes');
    }
};
