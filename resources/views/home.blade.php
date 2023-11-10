@extends('app')

@section('titulo', 'Ponto web')

@section('conteudo')
    <main>
        <div class="container mt-4 cards">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Funcionários Trabalhando</h5>
                        <p class="card-text"><span id="numFuncionarios">25</span></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-2"><span id="porcentagem">60%</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Funcionários Faltantes</h5>
                        <p class="card-text"><span id="numFuncionarios">25</span></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-2"><span id="porcentagem">60%</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Funcionários em Folga</h5>
                        <p class="card-text"><span id="numFuncionarios">25</span></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-2"><span id="porcentagem">60%</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Funcionários de Férias</h5>
                        <p class="card-text"><span id="numFuncionarios">25</span></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-2"><span id="porcentagem">60%</span></p>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Funcionários Afastados</h5>
                        <p class="card-text"><span id="numFuncionarios">25</span></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-2"><span id="porcentagem">60%</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ausência Justificada</h5>
                        <p class="card-text"><span id="numFuncionarios">25</span></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-2"><span id="porcentagem">60%</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Solicitações Pendentes</h5>
                        <p class="card-text"><span id="numFuncionarios">25</span></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-2"><span id="porcentagem">60%</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Assinaturas Pendentes</h5>
                        <p class="card-text"><span id="numFuncionarios">25</span></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-2"><span id="porcentagem">60%</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4 equipamentos">
            <h3>Equipamentos</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Local do Comunicador</th>
                        <th scope="col">Status do Comunicador</th>
                        <th scope="col">Status do Equipamento</th>
                    </tr>
                </thead>
                <tbody id="tabelaCorpo">
                    <!-- Preencha a tabela com os dados necessários -->
                </tbody>
            </table>
        </div>
    </main>
@endsection