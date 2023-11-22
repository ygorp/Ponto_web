@extends('app')

@section('titulo', 'Editar | Funcionario')

@section('conteudo')
    <main>
        <div class="titulo-empresa">
            <h2>Funcionário</h2>
        </div>
        <div class="form-cad">
            <form class="row g-3 container" action="{{ route('funcionario.update', $funcionarios) }}" method="POST">
                @csrf
                @method('PUT')
                <h3>Dados de Identificação</h3>
                <div class="col-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" value="{{ $funcionarios->nome }}" name="nome" id="nome" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="matricula" class="form-label">Matricula</label>
                    <input type="text" value="{{ $funcionarios->matricula }}" name="matricula" id="matricula" class="form-control">
                </div>
                <div class="col-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" value="{{ $funcionarios->cpf }}" name="cpf" id="cpf" class="form-control">
                </div>
                <div class="col-3">
                    <label for="pis" class="form-label">PIS</label>
                    <input type="text" value="{{ $funcionarios->pis }}" name="pis" id="pis" class="form-control">
                </div>
                
                <div class="col-md-3">
                    <label for="admissao" class="form-label">Data de Admissão</label>
                    <input type="date" value="{{ $funcionarios->admissao }}" name="admissao" id="admissao" class="form-control">
                </div>
                <div class="col-4">
                    <label for="horário" class="form-label">Horário</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecione um horário</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                </div>
                <h3>Dados genéricos</h3>
                <div class="col-6">
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
                <div class="btn-cad-funcionarios">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a type="reset" href="{{ route('funcionario.list') }}" class="btn btn-primary" style="text-decoration: none;">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
@endsection