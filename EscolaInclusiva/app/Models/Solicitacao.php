<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;
    
    protected $table = "solicitacao";
    protected $guarded =[];

    protected $fillabel =[
        'data', 'nome', 'estado', 'descricao', 'projeto_id'
    ];
}
