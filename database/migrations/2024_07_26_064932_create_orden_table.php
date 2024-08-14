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
        Schema::create('orden', function (Blueprint $table) {
            $table->integer('id_orden', true);
            $table->date('fecha_ord');
            $table->string('estatus', 64);
            $table->integer('total');
            $table->string('metodo', 64);
            $table->integer('id_empleado')->index('id_empleado');
            $table->integer('id_clientes')->index('id_clientes');
            $table->integer('id_servicio')->index('id_servicio');
            $table->integer('id_paquete')->index('id_paquete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden');
    }
};
