<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    use HasFactory;

    protected $fillable = ['cp','nombre_vialidad','tipo_vialidad','num_interior','num_exterior','localidad','colonia','municipio','entidad','entre_calle1','entre_calle2'];

    public function dmicilios()
    {
        return $this->hasMany(User::class, 'domicilio_id');
    }
}
