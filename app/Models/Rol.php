<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles'; // Nombre de la tabla roles
    public $timestamps = false;

    protected $primaryKey = 'id_rol'; // Suponiendo que 'id_rol' es la clave primaria

    // Definir relación muchos a muchos con empleados
    public function empleados()
    {
        return $this->belongsToMany(Empleado::class, 'empleados_roles', 'id_rol', 'id_empleado');
    }
}
