<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $fillable = [
        'nome',
        'matricula', 
        'cpf', 
        'pis', 
        'admissao'
    ];

    use HasFactory;
}
