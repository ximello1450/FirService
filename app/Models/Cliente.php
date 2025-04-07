<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'correo', 'contra',
    ];

    protected $hidden = [
        'contra',
    ];

    // Define el nombre de la tabla en la base de datos
    protected $table = 'clientes';

    // Define la clave primaria de la tabla
    protected $primaryKey = 'id_clientes';
    //este si no se 
    public $timestamps = false;

    /**
     * Define la relación  entre Cliente y Rol.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol()
    {
        // Establece que un cliente pertenece a un rol específico
        return $this->belongsTo(Roles::class, 'id_rol', 'id_rol');
    }
}
