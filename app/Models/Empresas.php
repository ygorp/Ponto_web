<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $fillable = [
        'razaoSocial', 
        'nomeFantasia', 
        'cnpjCpf', 
        'inscricao', 
        'enderecoEmpresa', 
        'bairroEmpresa', 
        'cidadeEmpresa', 
        'cepEmpresa', 
        'estadoEmpresa', 
        'paisEmpresa', 
        'telefoneEmpresa', 
        'ceiEmpresa', 
        'folhaEmpresa', 
        'responsavelEmpresa', 
        'cargoEmpresa', 
        'emailEmpresa'
    ];

    use HasFactory;
}
