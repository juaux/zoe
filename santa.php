<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão da Clínica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1 class="text-center">Clínica Beneficente</h1>
        </div>
    </header>

    <main class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <section id="medicos" class="card">
                    <div class="card-header bg-light">
                        <h2 class="card-title">Cadastro de Médicos</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nome_medico">Nome:</label>
                                <input type="text" class="form-control" id="nome_medico" name="nome_medico" required>
                            </div>
                            <div class="form-group">
                                <label for="especialidade">Especialidade:</label>
                                <input type="text" class="form-control" id="especialidade" name="especialidade" required>
                            </div>
                            <div class="form-group">
                                <label for="crm">CRM:</label>
                                <input type="text" class="form-control" id="crm" name="crm" required>
                            </div>
                            <div class="form-group">
                                <label for="contato_medico">Contato:</label>
                                <input type="text" class="form-control" id="contato_medico" name="contato_medico" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar Médico</button>
                        </form>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section id="pacientes" class="card">
                    <div class="card-header bg-light">
                        <h2 class="card-title">Cadastro de Pacientes</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nome_paciente">Nome:</label>
                                <input type="text" class="form-control" id="nome_paciente" name="nome_paciente" required>
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF:</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" required>
                            </div>
                            <div class="form-group">
                                <label for="data_nascimento">Data de Nascimento:</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                            </div>
                            <div class="form-group">
                                <label for="contato_paciente">Contato:</label>
                                <input type="text" class="form-control" id="contato_paciente" name="contato_paciente" required>
                            </div>
                            <div class="form-group">
                                <label for="plano_de_saude">Plano de Saúde (opcional):</label>
                                <input type="text" class="form-control" id="plano_de_saude" name="plano_de_saude">
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar Paciente</button>
                        </form>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section id="agendamentos" class="card">
                    <div class="card-header bg-light">
                        <h2 class="card-title">Agendamento de Consultas</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="medico">Médico:</label>
                                <select class="form-control" id="medico" name="medico">
                                    <option value="">Selecione um médico</option>
                                    <!-- Opções de médicos seriam carregadas dinamicamente -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="paciente">Paciente:</label>
                                <select class="form-control" id="paciente" name="paciente">
                                    <option value="">Selecione um paciente</option>
                                    <!-- Opções de pacientes seriam carregadas dinamicamente -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="data_agendamento">Data:</label>
                                <input type="date" class="form-control" id="data_agendamento" name="data_agendamento" required>
                            </div>
                            <div class="form-group">
                                <label for="hora_agendamento">Hora:</label>
                                <input type="time" class="form-control" id="hora_agendamento" name="hora_agendamento" required>
                            </div>
                            <div class="form-group">
                                <label for="observacoes">Observações (opcional):</label>
                                <textarea class="form-control" id="observacoes" name="observacoes"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Agendar Consulta</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <footer class="bg-secondary text-white py-3 mt-4">
        <div class="container">
            <p class="text-center">&copy; 2023 Clínica Beneficente</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>