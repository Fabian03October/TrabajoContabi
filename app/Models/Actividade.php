<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion','obligacion','tasa_impositiva','periocidad_pago','regimene_id'];

    public function ActividadTipoIngreso()
    {
        return $this->hasMany(TipoIngreso::class, 'actividade_id');
    }
}
