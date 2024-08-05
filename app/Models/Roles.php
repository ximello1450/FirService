<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = ['nombre'];
    protected $primaryKey = 'id_rol'; 
    public $incrementing = true;


    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'id_rol', 'id_rol');
    }
    public function empleado()
    {
        return $this->belongsToMany(Empleado::class, 'empleados_roles', 'id_empleado', 'id_rol');
    }
}
