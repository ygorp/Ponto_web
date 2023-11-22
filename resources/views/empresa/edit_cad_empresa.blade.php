@extends('app')

@section('titulo', 'Editar | Empresa')

@section('conteudo')
    <main>
        <div class="titulo-empresa">
            <h2>Empresa</h2>
        </div>
        <div class="form-cad">
            <form class="row g-3" action="{{ route('empresa.update', $empresas) }}" method="POST">
                @csrf
                @method('PUT')
                <h3>Dados de Identificação</h3>
                <div class="col-12">
                    <label for="razaoSocial" class="form-label">Razão Social</label>
                    <input type="text" value="{{ $empresas->razaoSocial }}" name="razaoSocial" id="razaoSocial" class="form-control">
                </div>
                <div class="col-12">
                    <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
                    <input type="text" value="{{ $empresas->nomeFantasia }}" name="nomeFantasia" id="nomeFantasia" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="cnpjCpf" class="form-label">CNPJ/CPF</label>
                    <input type="text" value="{{ $empresas->cnpjCpf }}" name="cnpjCpf" id="cnpjCpf" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="inscricao" class="form-label">Inscrição</label>
                    <input type="text" value="{{ $empresas->inscricao }}" name="inscricao" id="inscricao" class="form-control">
                </div>
                <h3>Dados genéricos</h3>
                <div class="col-12">
                    <label for="enderecoEmpresa" class="form-label">Endereço</label>
                    <input type="text" value="{{ $empresas->enderecoEmpresa }}" name="enderecoEmpresa" id="enderecoEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="bairroEmpresa" class="form-label">Bairro</label>
                    <input type="text" value="{{ $empresas->bairroEmpresa }}" name="bairroEmpresa" id="bairroEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="cidadeEmpresa" class="form-label">Cidade</label>
                    <input type="text" value="{{ $empresas->cidadeEmpresa }}" name="cidadeEmpresa" id="cidadeEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="cepEmpresa" class="form-label">CEP</label>
                    <input type="text" value="{{ $empresas->cepEmpresa }}" name="cepEmpresa" id="cepEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="estadoEmpresa" class="form-label">Estado/Distrito</label>
                    <input type="text" value="{{ $empresas->estadoEmpresa }}" name="estadoEmpresa" id="estadoEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="paisEmpresa" class="form-label">Pais</label>
                    <input type="text" value="{{ $empresas->paisEmpresa }}" name="paisEmpresa" id="paisEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="telefoneEmpresa" class="form-label">Telefone</label>
                    <input type="text" value="{{ $empresas->telefoneEmpresa }}" name="telefoneEmpresa" id="telefoneEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="ceiEmpresa" class="form-label">CEI</label>
                    <input type="text" value="{{ $empresas->ceiEmpresa }}" name="ceiEmpresa" id="ceiEmpresa" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="folhaEmpresa" class="form-label">Nº de Folha</label>
                    <input type="text" value="{{ $empresas->folhaEmpresa }}" name="folhaEmpresa" id="folhaEmpresa" class="form-control">
                </div>
                <h3>Responsável</h3>
                <div class="col-12">
                    <label for="responsavelEmpresa" class="form-label">Nome do Responsável</label>
                    <input type="text" value="{{ $empresas->responsavelEmpresa }}" name="responsavelEmpresa" id="responsavelEmpresa" class="form-control">
                </div>
                <div class="col-12">
                    <label for="cargoEmpresa" class="form-label">Cargo do Responsável</label>
                    <input type="text" value="{{ $empresas->cargoEmpresa }}" name="cargoEmpresa" id="cargoEmpresa" class="form-control">
                </div>
                <div class="col-12">
                    <label for="emailEmpresa" class="form-label">Email do Responsável</label>
                    <input type="text" value="{{ $empresas->emailEmpresa }}" name="emailEmpresa" id="emailEmpresa" class="form-control">
                </div>
                <h3>Logotipo para Relatórios</h3>
                <div class="col-8">
                    <input type="file" name="aquivoLogo" id="arquivoLogo">
                </div>
                <div class="btn-form-cad">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a type="reset" href="{{ route('empresa.index') }}" class="btn btn-primary" style="text-decoration: none;">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
@endsection