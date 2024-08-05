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
        Schema::table('empleados_roles', function (Blueprint $table) {
            $table->foreign(['id_empleado'], 'empleados_roles_ibfk_1')->references(['id_empleado'])->on('empleados')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_rol'], 'empleados_roles_ibfk_2')->references(['id_rol'])->on('roles')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empleados_roles', function (Blueprint $table) {
            $table->dropForeign('empleados_roles_ibfk_1');
            $table->dropForeign('empleados_roles_ibfk_2');
        });
    }
};
