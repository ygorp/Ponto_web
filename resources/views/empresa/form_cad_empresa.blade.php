@extends('app')

@section('titulo', 'Cadastro - Empresa')

@section('conteudo')
    <main>
        <div class="titulo-empresa">
            <h2>Empresa</h2>
        </div>
        <div class="form-cad">
            <form class="row g-3" action="{{ route('empresa.store') }}" method="POST">
                @csrf
                <h3>Dados de Identificação</h3>
                <div class="col-12">
                    <label for="razaoSocial" class="form-label">Razão Social</label>
                    <input type="text" name="razaoSocial" id="razaoSocial" class="form-control">
                </div>
                <div class="col-12">
                    <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
                    <input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="cnpjCpf" class="form-label">CNPJ/CPF</label>
                    <input type="text" name="cnpjCpf" id="cnpjCpf" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="inscricao" class="form-label">Inscrição</label>
                    <input type="text" name="inscricao" id="inscricao" class="form-control">
                </div>
                <h3>Dados genéricos</h3>
                <div class="col-12">
                    <label for="enderecoEmpresa" class="form-label">Endereço</label>
                    <input type="text" name="enderecoEmpresa" id="enderecoEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="bairroEmpresa" class="form-label">Bairro</label>
                    <input type="text" name="bairroEmpresa" id="bairroEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="cidadeEmpresa" class="form-label">Cidade</label>
                    <input type="text" name="cidadeEmpresa" id="cidadeEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="cepEmpresa" class="form-label">CEP</label>
                    <input type="text" name="cepEmpresa" id="cepEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="estadoEmpresa" class="form-label">Estado/Distrito</label>
                    <input type="text" name="estadoEmpresa" id="estadoEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="paisEmpresa" class="form-label">Pais</label>
                    <input type="text" name="paisEmpresa" id="paisEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="telefoneEmpresa" class="form-label">Telefone</label>
                    <input type="text" name="telefoneEmpresa" id="telefoneEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="ceiEmpresa" class="form-label">CEI</label>
                    <input type="text" name="ceiEmpresa" id="ceiEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="folhaEmpresa" class="form-label">Nº de Folha</label>
                    <input type="text" name="folhaEmpresa" id="folhaEmpresa" class="form-control">
                </div>
                <h3>Responsável</h3>
                <div class="col-12">
                    <label for="responsavelEmpresa" class="form-label">Nome do Responsável</label>
                    <input type="text" name="responsavelEmpresa" id="responsavelEmpresa" class="form-control">
                </div>
                <div class="col-12">
                    <label for="cargoEmpresa" class="form-label">Cargo do Responsável</label>
                    <input type="text" name="cargoEmpresa" id="cargoEmpresa" class="form-control">
                </div>
                <div class="col-12">
                    <label for="emailEmpresa" class="form-label">Email do Responsável</label>
                    <input type="text" name="emailEmpresa" id="emailEmpresa" class="form-control">
                </div>
                <h3>Logotipo para Relatórios</h3>
                <input type="file" name="aquivoLogo" id="arquivoLogo">

                <div class="btn-cad-empresa">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a type="reset" href="{{ route('empresa.list') }}" class="btn btn-primary" style="text-decoration: none;">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
@endsection