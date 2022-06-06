<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoTarefa extends Model
{
    use HasFactory;

    protected $table = "estado__tarefa";
    protected $guarded =[];

    protected $fillabel =[
        'tipo_estado'
    ];
}
