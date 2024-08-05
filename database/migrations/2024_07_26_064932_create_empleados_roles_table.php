<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('empleados_roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_empleado')->constrained('empleados');
            $table->foreignId('id_rol')->constrained('roles');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados_roles');
    }
};
