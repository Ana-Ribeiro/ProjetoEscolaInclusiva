<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipa extends Model
{
    use HasFactory;

    protected $table = "equipa";
    protected $guarded =[];

    protected $fillabel =[
        'id_membros_equipa'
    ];
}
