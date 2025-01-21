<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'clave','categoria','tasa_impositiva','regimene_id','tipopersona_id'];

    public function ActividadIncripcione()
    {
        return $this->hasMany(Inscripcione::class, 'actividade_id');
    }

    public function ActividadObligacione()
    {
        return $this->hasMany(ObligacioneActividad::class, 'actividade_id');
    }
}
