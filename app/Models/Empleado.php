<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Empleado extends Authenticatable
{
    use HasFactory, Notifiable;

    public $incrementing = true;
    protected $primaryKey = 'id_empleado';
    public $timestamps = false;

    // Define los campos que se pueden llenar masivamente
    protected $fillable = [
        'correo', 'contra',
    ];

    // Oculta los campos sensibles
    protected $hidden = [
        'contra', // Asegúrate de ocultar la contraseña
    ];

    // Define los roles relacionados
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'empleados_roles', 'id_empleado', 'id_rol');
    }
}
