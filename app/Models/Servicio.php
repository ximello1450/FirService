<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    //Se le dice que el id del objeto es incremetal o no
    public $incrementing = true;
    //declara la PK del servicio
    protected $primaryKey = 'id_servicio';
    //indispensable para que no les de error, por qie agrega columnas llamadas createdat y updateat
    public $timestamps = false;

}
