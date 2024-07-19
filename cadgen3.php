<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 700px; /* Ajuste a largura conforme necessário */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            margin-bottom: 15px;
        }

        .form-group {
            flex: 1;
            margin-right: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .imagem-preview {
            width: 150px;
            height: 150px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 10px;
        }

        .imagem-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .foto-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .foto-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulário de Cadastro</h2>
        <form action="#" method="post">
            <div class="form-row">
                <div class="form-group">
                    <label for="curso">Cursos:</label>
                    <select id="curso" name="curso">
                        <option value="">Selecione um curso</option>
                        <!-- Opções de cursos seriam carregadas aqui do banco de dados -->
                        <option value="curso1">Curso 1</option>
                        <option value="curso2">Curso 2</option>
                        <option value="curso3">Curso 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="text" id="data" name="data" value="<?php echo date('d/m/Y'); ?>" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="nomeCompleto">Nome Completo:</label>
                    <input type="text" id="nomeCompleto" name="nomeCompleto" placeholder="Digite seu nome completo">
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Data de Nascimento:</label>
                    <input type="text" id="dataNascimento" name="dataNascimento" placeholder="DD/MM/AAAA">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="text" id="idade" name="idade" readonly>
                </div>
                <div class="form-group">
                    <label for="rg">RG:</label>
                    <input type="text" id="rg" name="rg" placeholder="00.000.000-0">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
                </div>
                <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" placeholder="00000-000">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" readonly>
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" readonly>
                </div>
                <div class="form-group">
                    <label for="uf">UF:</label>
                    <input type="text" id="uf" name="uf" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="email@example.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="nomePai">Nome do Pai:</label>
                    <input type="text" id="nomePai" name="nomePai" placeholder="Nome do Pai">
                </div>
                <div class="form-group">
                    <label for="nomeMae">Nome da Mãe:</label>
                    <input type="text" id="nomeMae" name="nomeMae" placeholder="Nome da Mãe">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="responsavel">Responsável:</label>
                    <input type="text" id="responsavel" name="responsavel" placeholder="Nome do Responsável">
                </div>
                <div class="form-group">
                    <label for="telefoneResponsavel">Telefone do Responsável:</label>
                    <input type="text" id="telefoneResponsavel" name="telefoneResponsavel" placeholder="(00) 00000-0000">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                </div>
            </div>
            <input type="submit" value="Cadastrar">
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script>
            // Máscaras de entrada
            $("#dataNascimento").mask("99/99/9999");
            $("#rg").mask("99.999.999-9");
            $("#cpf").mask("999.999.999-99");
            $("#cep").mask("99999-999");
            $("#telefone").mask("(99) 99999-9999");
            $("#telefoneResponsavel").mask("(99) 99999-9999");

            // Calcular idade
            $("#dataNascimento").on("blur", function() {
                var dataNascimento = $(this).val();
                if (dataNascimento) {
                    var dataAtual = new Date();
                    var anoAtual = dataAtual.getFullYear();
                    var mesAtual = dataAtual.getMonth() + 1;
                    var diaAtual = dataAtual.getDate();

                    var dataNascimentoArray = dataNascimento.split("/");
                    var anoNascimento = parseInt(dataNascimentoArray[2]);
                    var mesNascimento = parseInt(dataNascimentoArray[1]);
                    var diaNascimento = parseInt(dataNascimentoArray[0]);

                    var idade = anoAtual - anoNascimento;

                    if (mesAtual < mesNascimento || (mesAtual === mesNascimento && diaAtual < diaNascimento)) {
                        idade--;
                    }

                    $("#idade").val(idade);
                }
            });

            // Busca de endereço pelo CEP
            $("#cep").on("blur", function() {
                var cep = $(this).val().replace(/\D/g, '');
                if (cep.length === 8) {
                    $.ajax({
                        url: 'https://viacep.com.br/ws/' + cep + '/json/',
                        dataType: 'json',
                        success: function(data) {
                            if (data.erro) {
                                alert("CEP inválido.");
                            } else {
                                $("#endereco").val(data.logradouro);
                                $("#bairro").val(data.bairro);
                                $("#cidade").val(data.localidade);
                                $("#uf").val(data.uf);
                            }
                        }
                    });
                }
            });
        </script>
    </div>
</body>
</html>