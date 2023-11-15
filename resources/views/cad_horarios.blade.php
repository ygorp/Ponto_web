<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Horários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/Frontend/css/cadastros.css">
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
        <div class="container mt-4 equipamentos">
            <div class="top_cad">
                <h3>Horários</h3>
                <div class="btn_cad">
                    <button id="btn-add-empresa">+ Adicionar</button>
                    <input type="search" name="pesquisa" id="pesquisa_empresa" placeholder="Digite o nome do horário">
                    <button type="submit" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome do horário</th>
                    </tr>
                </thead>
                <tbody id="tabelaCorpo">
                    <!-- Preencha a tabela com os dados necessários -->
                </tbody>
            </table>
        </div>
    </main>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>