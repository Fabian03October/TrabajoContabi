<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regimene extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion','tasa_impositiva'];

    public function regimen()
    {
        return $this->hasMany(Actividade::class, 'regimene_id');
    }

}
