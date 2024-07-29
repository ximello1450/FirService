<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paquete extends Model
{
    use HasFactory;
    public $incrementing = true;
    //declara la PK del servicio
    //indispensable para que no les de error, por qie agrega columnas llamadas createdat y updateat
    public $timestamps = false;
    protected $table = 'paquetes';
    protected $primaryKey = 'id_paquete';
    protected $fillable = [
        'nombre_paq', 'costo', 'img_paq', 'descripcion', 'descuento', 'personalizado', 'estatus'
    ];

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'paquetes_servicios', 'id_paquete', 'id_servicio');
    }
}



