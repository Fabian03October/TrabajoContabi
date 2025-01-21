<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obligacione extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','clave' ,'descripcion'];

    public function ActividObligacione()
    {
        return $this->hasMany(ObligacioneActividad::class, 'obligacione_id');
    }
}
