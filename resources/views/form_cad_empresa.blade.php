<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto web - Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/Frontend/css/form-cad-empresa.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="/Frontend/img/logo.png" alt="logo ponto web" class="logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Página Inicial</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Cadastros
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Empresa</a></li>
                        <li><a class="dropdown-item" href="#">Funcionários</a></li>
                        <li><a class="dropdown-item" href="#">Horários</a></li>
                        <li><a class="dropdown-item" href="#">Banco de Horas</a></li>
                        <li><a class="dropdown-item" href="#">Departamentos</a></li>
                        <li><a class="dropdown-item" href="#">Funções</a></li>
                        <li><a class="dropdown-item" href="#">Motivos de Demissão</a></li>
                        <li><a class="dropdown-item" href="#">Feriados</a></li>
                        <li><a class="dropdown-item" href="#">Justificativas</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Apuração de Ponto
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cartão de Ponto</a></li>
                            <li><a class="dropdown-item" href="#">Importar Arquivo AFD</a></li>
                            <li><a class="dropdown-item" href="#">Comunicação</a></li>
                            <li><a class="dropdown-item" href="#">Logs da Comunicação</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Configurações
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Operadores</a></li>
                            <li><a class="dropdown-item" href="#">Equipamentos</a></li>
                            <li><a class="dropdown-item" href="#">Exportar Dados</a></li>
                            <li><a class="dropdown-item" href="#">Importar Dados</a></li>
                            <li><a class="dropdown-item" href="#">Ponto de Restauração</a></li>
                            <li><a class="dropdown-item" href="#">Aplicativo</a></li>
                            <li><a class="dropdown-item" href="#">Colunas Mix</a></li>
                            <li><a class="dropdown-item" href="#">Ações em Massa</a></li>
                            <li><a class="dropdown-item" href="#">Funcionários Demitidos</a></li>
                            <li><a class="dropdown-item" href="#">Configurações Avançadas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Relatórios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cálculos</a></li>
                            <li><a class="dropdown-item" href="#">Ponto Diário</a></li>
                            <li><a class="dropdown-item" href="#">Funcionários</a></li>
                            <li><a class="dropdown-item" href="#">Quadro de Horários</a></li>
                            <li><a class="dropdown-item" href="#">Justificativas Lançadas</a></li>
                            <li><a class="dropdown-item" href="#">Afastamentos</a></li>
                            <li><a class="dropdown-item" href="#">Absenteismo</a></li>
                            <li><a class="dropdown-item" href="#">Inconsistências</a></li>
                            <li><a class="dropdown-item" href="#">Feriados</a></li>
                            <li><a class="dropdown-item" href="#">Extrato do Banco de Horas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Arquivos Fiscais
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">AFDT</a></li>
                            <li><a class="dropdown-item" href="#">ACJEF</a></li>
                            <li><a class="dropdown-item" href="#">AFD</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <main>
        <div class="titulo-empresa">
            <h2>Empresa</h2>
        </div>

        <div class="form-cad">
            <form class="row g-3">
                <h3>Dados de Identificação</h3>
                <div class="col-12">
                    <label for="nomeEmpresa" class="form-label">Nome</label>
                    <input type="text" name="nomeEmpresa" id="nomeEmpresa" class="form-control">
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
                    <button type="reset" class="btn btn-primary">Cancelar</button>
                </div>
            </form>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>