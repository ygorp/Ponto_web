<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function list()
    {
        $funcionarios = ( Funcionarios::get() );

        return view('funcionario.cad_funcionarios', [
            'funcionarios' => $funcionarios
        ]);
    }

    public function create()
    {
        return view( 'funcionario.form_cad_funcionarios' );
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Funcionarios::create($dados);

        return redirect('/f');
    }

    public function edit(int $id)
    {
        $funcionario = Funcionarios::find($id);

        return view('funcionario.edit_cad_funcionarios', [
            'funcionarios' => $funcionario
        ]);
    }

    public function update(int $id, Request $request)
    {
        $funcionarios = Funcionarios::find($id);

        $funcionarios->update([
            'nome' => $request->nome,
            'matricula' => $request->matricula, 
            'cpf' => $request->cpf, 
            'pis' => $request->pis, 
            'admissao' => $request->admissao
        ]);

        return redirect('/f');
    }

    public function delete(int $id)
    {
        $funcionarios = Funcionarios::find($id);

        $funcionarios->delete();

        return redirect('/f');
    }
}
