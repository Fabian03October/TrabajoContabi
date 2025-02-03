<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObImpuesto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    public function objetoservicio()
    {
        return $this->hasMany(Facturasconcepto::class, 'ob_impuestos_id');
    }
}
