<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regimene extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion','tipopersona_id'];

    public function regimen()
    {
        return $this->hasMany(Actividade::class, 'regimene_id');
    }

}
