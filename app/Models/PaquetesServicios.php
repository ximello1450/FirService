<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaquetesServicios extends Model
{
    use HasFactory;

    public $incrementing = true;
    public $timestamps = false;
    protected $table = 'paquetes_servicios';

    // Define los campos que se pueden llenar masivamente
    protected $fillable = [
        'correo', 'contra',
    ];
}
