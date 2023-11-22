<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Mostra a lista de empresas cadastradas
     *
     * @return View
     */
    public function index(): View
    {
        $empresas = ( Empresas::get() );

        return view('empresa.cad_empresa', [
            'empresas' => $empresas
        ]);
    }

    /**
     * Exibe o form de nova empresa
     *
     * @return View
     */
    public function create(): View
    {
        return view( 'empresa.form_cad_empresa' );
    }

    /**
     * Adiciona a nova empresa no banco de dados
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        Empresas::create($dados);

        return redirect('/empresa');
    }

    /**
     * Exibe dados de determinada empresa
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Exibe formulário de edição da empresa
     *
     * @param integer $id
     * @return View
     */
    public function edit(string $id): View
    {
        $empresa = Empresas::find($id);

        return view('empresa.edit_cad_empresa', [
            'empresas' => $empresa
        ]);
    }

    /**
     * Atualiza a empresa no banco de dados, após edição
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request, string $id): RedirectResponse
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

        return redirect('/empresa');
    }

    /**
     * Remove a empresa do banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        $empresa = Empresas::find($id);

        $empresa->delete();

        return redirect('/empresa');
    }
}
