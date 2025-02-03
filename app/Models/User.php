<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


//Agregamos spatie
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'apellido_p',
        'apellido_m',
        'curp',
        'rfc',
        'FechaNac',
        'Sexo',
        'Nacionalidad',
        'FechaIniOP',
       'fechaUltiCamEst',
       'NombreComercial',
       'status_padron',
       'fecha_nacimiento',
       'sexo',
        'status',
        'email',
        'password',
        'domicilio_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function domicilio()
    {
        return $this->belongsTo(Domicilio::class, 'domicilio_id');
    }

    public function ActividadUser()
    {
        return $this->hasMany(User_Actividade::class, 'user_id');
    }

    /**
     * Relación: Un usuario puede inscribirse a muchas actividades
     */
    public function Inscripcion()
    {
        return $this->hasMany(Inscripcione::class, 'user_id');
    }

    /**
     * Relación: Un usuario puede emitir muchas facturas.
     */
    public function facturasEmitidas()
    {
        return $this->hasMany(Factura::class, 'id_user_emisor');
    }

    /**
     * Relación: Un usuario puede recibir muchas facturas.
     */
    public function facturasRecibidas()
    {
        return $this->hasMany(Factura::class, 'id_user_receptor');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
