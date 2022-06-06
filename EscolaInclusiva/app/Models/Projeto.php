<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $table = "projeto";
    protected $guarded =[];

    protected $fillabel =[
        'canal_comunicacao', 'nome_projeto', 'estado_projeto', 'estado_arte', 'dt_ini', 'dt_fim', 'equipa', 'nome_owner', 'estado_id'
    ];
}
