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
        Schema::table('paquetes_servicios', function (Blueprint $table) {
            $table->foreign(['id_paquete'], 'paquetes_servicios_ibfk_1')->references(['id_paquete'])->on('paquetes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_servicio'], 'paquetes_servicios_ibfk_2')->references(['id_servicio'])->on('servicios')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('paquetes_servicios', function (Blueprint $table) {
            $table->dropForeign('paquetes_servicios_ibfk_1');
            $table->dropForeign('paquetes_servicios_ibfk_2');
        });
    }
};
