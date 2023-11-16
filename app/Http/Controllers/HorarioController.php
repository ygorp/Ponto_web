<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function list()
    {
        return view('horario.cad_horarios');
    }
}
