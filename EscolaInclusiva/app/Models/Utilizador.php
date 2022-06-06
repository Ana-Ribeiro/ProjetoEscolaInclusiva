<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilizador extends Model
{
    use HasFactory;

    protected $table = "utilizador";
    protected $guarded =[];

    protected $fillabel =[
        'nome', 'password', 'email', 'tipo_id'
    ];
}
