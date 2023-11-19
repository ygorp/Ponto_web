@extends('app')

@section('titulo', 'Cadastro | Empresa')

@section('conteudo')
    <main>
        <div class="container mt-4 equipamentos">
            <div class="top_cad">
                <h3>Empresas</h3>
                <div class="btn_cad">
                    <a href="{{ route('empresa.create') }}" id="btn-add-empresa" style="text-decoration: none;">+ Adicionar</a>
                    <input type="search" name="pesquisa" id="pesquisa_empresa" placeholder="Digite o nome da empresa">
                    <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Código</th>
                        <th scope="col">Razão Social</th>
                        <th scope="col">CNPJ/CPF</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="tabelaCorpo">
                    @foreach ($empresas as $empresa)
                    <tr class="text-center">
                        <th scope="row">{{ $empresa->id }}</th>
                        <td>{{ $empresa->razaoSocial }}</td>
                        <td>{{ $empresa->cnpjCpf }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('empresa.edit', $empresa) }}">Editar</a>
                            <form action="{{ route('empresa.delete', $empresa) }}" method="POST" style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection