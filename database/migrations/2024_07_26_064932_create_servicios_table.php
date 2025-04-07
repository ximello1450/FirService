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
        Schema::create('servicios', function (Blueprint $table) {
            $table->integer('id_servicio', true);
            $table->string('nombre_serv', 64);
            $table->text('descripcion');
            $table->integer('costo');
            $table->text('img_ser');
            $table->decimal('descuento')->nullable();
            $table->char('estatus', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
