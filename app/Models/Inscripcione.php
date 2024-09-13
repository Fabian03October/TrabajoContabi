<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcione extends Model
{
    use HasFactory;


    protected $fillable = ['fecha_inicio', 'fecha_fin','porcentaje','user_id','tipo_ingreso_id'];
}
