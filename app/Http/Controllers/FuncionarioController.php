<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function list()
    {
        return view('funcionario.cad_funcionarios');
    }
}
