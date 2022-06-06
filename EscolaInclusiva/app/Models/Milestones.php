<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestones extends Model
{
    use HasFactory;

    protected $table = "milestones";
    protected $guarded =[];

    protected $fillabel =[
        'dt_inicio_projeto', 'data', 'nome', 'descricao', 'projeto_id'
    ];
}
