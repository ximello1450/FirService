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
        Schema::create('paquetes', function (Blueprint $table) {
            $table->integer('id_paquete', true);
            $table->string('nombre_paq', 64);
            $table->text('descripcion');
            $table->integer('costo');
            $table->text('img_paq');
            $table->decimal('descuento')->nullable();
            $table->char('personalizado', 1);
            $table->char('estatus', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquetes');
    }
};
