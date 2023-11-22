@extends('app')

@section('titulo', 'Cadastro - Funcionários')

@section('conteudo')
    <main>
        <div class="container mt-4 equipamentos">
            <div class="top_cad">
                <h3>Funcionários</h3>
                <div class="btn_cad">
                    <a href="{{ route('funcionario.create') }}" id="btn-add-empresa" style="text-decoration: none;">+ Adicionar</a>
                    <input type="search" name="pesquisa" id="pesquisa_empresa" placeholder="Digite o nome do funcionário">
                    <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Código</th>
                        <th scope="col">Nome do funcionário</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Código Identificador</th>
                        <th scope="col">Departamento</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="tabelaCorpo">
                    @foreach ($funcionarios as $funcionario)
                    <tr class="text-center">
                        <th scope="row">{{ $funcionario->id }}</th>
                        <td>{{ $funcionario->nome }}</td>
                        <td>{{ $funcionario->cpf }}</td>
                        <td></td>
                        <td></td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('funcionario.edit', $funcionario) }}">Editar</a>
                            <form action="{{ route('funcionario.delete', $funcionario) }}" method="POST" style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection