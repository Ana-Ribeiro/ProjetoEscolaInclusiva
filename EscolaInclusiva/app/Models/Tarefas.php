<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    use HasFactory;

    protected $table = "tarefas";
    protected $guarded =[];

    protected $fillabel =[
        'nome_responsavel', 'dt_hora_inicio', 'dt_hora_fim', 'descricao_tarefa', 'estado_id'
    ];

}
