<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoriaservicio extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'division','grupo','clase'];

    public function categoria()
    {
        return $this->hasMany(Servicio::class, 'categoriaservicios');
    }
}
