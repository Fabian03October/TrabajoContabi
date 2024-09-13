<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Actividade extends Model
{
    use HasFactory;


    protected $fillable = ['porcentaje','user_id','actividade_id'];


}
