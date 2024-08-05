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
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id_clientes', true);
            $table->integer('id_rol')->index('id_rol');
            $table->string('nombre', 64);
            $table->string('app_paterno', 64);
            $table->string('app_materno', 64);
            $table->date('fecha_alta');
            $table->string('correo', 120)->nullable();
            $table->string('contra', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
