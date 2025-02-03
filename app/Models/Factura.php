<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'folio_fiscal',
        'no_serie',
        'folio',
        'serie',
        'efecto_comprobate',
        'uso_cfdi',
        'metodo_pago',
        'moneda',
        'cp',
        'sellado',
        'id_forma_pago',
        'id_user_emisor',
        'id_user_receptor',
    ];

    public function concepto()
    {
        return $this->hasMany(Facturasconcepto::class, 'factura_id');
    }
}
