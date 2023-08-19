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
        Schema::create('estudiantes', function (Blueprint $table) {
            //Aqui se añaden las variables que deseamos tenga nuestra tabla
            //Es decir nuestros campos
            $table->id();
            //Metodo unique nos muestra que el campo ingresado en la variable no este repetido.
            $table->string('matricula')->unique();
            $table->string('nombre');
            $table->string('apellidopaterno');
            $table->string('apellidomaterno');
            $table->string('correo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
