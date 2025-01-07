<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObligacioneActividad extends Model
{
    use HasFactory;

    protected $table = 'obligacione_actividades';

    protected $fillable = ['actividade_id','obligacione_id'];
}
