<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUtilizador extends Model
{
    use HasFactory;

    protected $table = "tipo__utilizador";
    protected $guarded =[];

    protected $fillabel =[
        'nome', 'password', 'email', 'tipo_id'
    ];
}
