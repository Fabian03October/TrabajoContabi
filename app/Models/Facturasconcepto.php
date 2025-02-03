<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturasconcepto extends Model
{
    use HasFactory;
    protected $table = 'facturasconceptos';

    protected $fillable = [
        'cantidad',
        'no_identificacion',
        'descripcion',
        'unidad',
        'valor_unitario',
        'importe',
        'descuento',
        'ob_impuestos_id',
        'servicio_id',
        'factura_id',
    ];

}
