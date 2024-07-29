<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'roles';

    // Clave primaria
    protected $primaryKey = 'id_rol';

    // Indicar que esta clave no es autoincremental (si aplica)
    public $incrementing = false;

    // Si tu tabla tiene timestamps
    public $timestamps = false;
}
