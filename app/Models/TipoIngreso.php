<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoIngreso extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'actividade_id'];

    // Definición de la relación con el modelo Inscripcion
    public function inscripciones()
    {
        return $this->hasMany(Inscripcione::class, 'tipo_ingreso_id');
    }
}
