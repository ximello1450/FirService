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
        Schema::table('orden', function (Blueprint $table) {
            $table->foreign(['id_empleado'], 'orden_ibfk_1')->references(['id_empleado'])->on('empleados')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_clientes'], 'orden_ibfk_2')->references(['id_clientes'])->on('clientes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_servicio'], 'orden_ibfk_3')->references(['id_servicio'])->on('servicios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_paquete'], 'orden_ibfk_4')->references(['id_paquete'])->on('paquetes_servicios')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orden', function (Blueprint $table) {
            $table->dropForeign('orden_ibfk_1');
            $table->dropForeign('orden_ibfk_2');
            $table->dropForeign('orden_ibfk_3');
            $table->dropForeign('orden_ibfk_4');
        });
    }
};
