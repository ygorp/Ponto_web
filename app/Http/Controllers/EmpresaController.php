<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function list()
    {
        $empresas = ( Empresas::get() );

        return view('empresa.cad_empresa', [
            'empresas' => $empresas
        ]);
    }

    public function create()
    {
        return view( 'empresa.form_cad_empresa' );
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Empresas::create($dados);

        return redirect('/e');
    }
}
