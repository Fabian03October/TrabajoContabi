<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'clave','descripcion','categoria','obligacion','tasa_impositiva','periocidad_pago','regimene_id','tipopersona_id'];

    public function ActividadIncripcione()
    {
        return $this->hasMany(Inscripcione::class, 'actividade_id');
    }

    public function ActividadObligacione()
    {
        return $this->hasMany(Obligacione_actividade::class, 'actividade_id');
    }
}
