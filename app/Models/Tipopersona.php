<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipopersona extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function tipopersona()
    {
        return $this->hasMany(Regimene::class, 'tipopersona_id');
    }
}
