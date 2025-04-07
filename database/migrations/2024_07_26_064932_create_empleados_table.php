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
        Schema::create('empleados', function (Blueprint $table) {
            $table->integer('id_empleado', true);
            $table->string('nombre', 64);
            $table->string('app_paterno', 64);
            $table->string('app_materno', 64);
            $table->string('cargo', 64);
            $table->date('fecha_alta');
            $table->string('horario_entrada', 64);
            $table->string('horario_salida', 64);
            $table->string('dias_trabajo', 64);
            $table->integer('num_tel',12);
            $table->string('correo', 64)->nullable();
            $table->string('contra', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
