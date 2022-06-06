<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custos extends Model
{
    use HasFactory;

    protected $table = "custos";
    protected $guarded =[];

    protected $fillabel =[
        'estado_custo', 'valor', 'tipo_custo_id'
    ];
}
