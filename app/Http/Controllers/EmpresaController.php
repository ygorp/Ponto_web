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

    public function edit(int $id)
    {
        $empresa = Empresas::find($id);

        return view('empresa.edit_cad_empresa', [
            'empresas' => $empresa
        ]);
    }

    public function update(int $id, Request $request)
    {
        $empresa = Empresas::find($id);

        $empresa->update([
            'razaoSocial' => $request->razaoSocial,
            'nomeFantasia' => $request->nomeFantasia, 
            'cnpjCpf' => $request->cnpjCpf, 
            'inscricao' => $request->inscricao, 
            'enderecoEmpresa' => $request->enderecoEmpresa, 
            'bairroEmpresa' => $request->bairroEmpresa, 
            'cidadeEmpresa' => $request->cidadeEmpresa, 
            'cepEmpresa' => $request->cepEmpresa, 
            'estadoEmpresa' => $request->estadoEmpresa, 
            'paisEmpresa' => $request->paisEmpresa, 
            'telefoneEmpresa' => $request->telefoneEmpresa, 
            'ceiEmpresa' => $request->ceiEmpresa, 
            'folhaEmpresa' => $request->folhaEmpresa, 
            'responsavelEmpresa' => $request->responsavelEmpresa, 
            'cargoEmpresa' => $request->cargoEmpresa, 
            'emailEmpresa' => $request->emailEmpresa
        ]);

        return redirect('/e');
    }

    public function delete(int $id)
    {
        $empresa = Empresas::find($id);

        $empresa->delete();

        return redirect('/e');
    }
}
