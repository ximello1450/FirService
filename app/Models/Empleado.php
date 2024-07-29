<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Empleado extends Model
{
    use HasFactory;

    public $incrementing = true;
    protected $primaryKey = 'id_empleado';
    public $timestamps = false;
    
   
    public function getRoles(){
        return Rol::join("empleados_roles", "empleados_roles.id_rol", "=", "roles.id_rol")
        ->select("roles.*")
        ->where("empleados_roles.id_empleado", "=", $this->id_empleado)
        ->get();
    }

    public function roles()
{
    return $this->belongsToMany(Rol::class, 'empleados_roles', 'id_empleado', 'id_rol');
}
    
}