<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Exibe lista dos funcionários cadastrados
     *
     * @return View
     */
    public function index(): View
    {
        $funcionarios = ( Funcionarios::get() );

        return view('funcionario.cad_funcionarios', [
            'funcionarios' => $funcionarios
        ]);
    }

    /**
     * Exibe formulário de criação de funcionário
     *
     * @return View
     */
    public function create(): View
    {
        return view( 'funcionario.form_cad_funcionarios' );
    }

    /**
     * Adiciona novo funcionário no banco de dados
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        Funcionarios::create($dados);

        return redirect('/funcionario');
    }

    /**
     * Exibe dados de determinado funcionário
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Exibe formulário de edição do funcionário
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $funcionario = Funcionarios::find($id);

        return view('funcionario.edit_cad_funcionarios', [
            'funcionarios' => $funcionario
        ]);
    }

    /**
     * Atualiza o funcionário no banco de dados, após edição
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $funcionarios = Funcionarios::find($id);

        $funcionarios->update([
            'nome' => $request->nome,
            'matricula' => $request->matricula, 
            'cpf' => $request->cpf, 
            'pis' => $request->pis, 
            'admissao' => $request->admissao
        ]);

        return redirect('/funcionario');
    }

    /**
     * Remove o funcionário no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $funcionarios = Funcionarios::find($id);

        $funcionarios->delete();

        return redirect('/funcionario');
    }
}
