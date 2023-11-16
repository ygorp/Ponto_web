@extends('app')

@section('titulo', 'Cadastro - Funcionários')

@section('conteudo')
    <main>
        <div class="container mt-4 equipamentos">
            <div class="top_cad">
                <h3>Funcionários</h3>
                <div class="btn_cad">
                    <button id="btn-add-empresa">+ Adicionar</button>
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
                    </tr>
                </thead>
                <tbody id="tabelaCorpo">
                    <!-- Preencha a tabela com os dados necessários -->
                </tbody>
            </table>
        </div>
    </main>
@endsection