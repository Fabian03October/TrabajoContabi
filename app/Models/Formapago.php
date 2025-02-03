<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formapago extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function factura()
    {
        return $this->hasMany(Factura::class, 'id_forma_pago');
    }

}
