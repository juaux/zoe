<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário de Eventos Editável</title>
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        .evento {
            background-color: #f9f9f9;
            padding: 5px;
            margin-bottom: 5px;
            border-radius: 3px;
            position: relative; /* Para posicionar o botão "X" */
        }

        .evento span {
            display: block;
        }

        .remover {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
            color: #aaa;
        }

        .adicionar {
            background-color: #4CAF50;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
            display: block;
        }
    </style>
</head>
<body>

    <h1>Calendário de Eventos</h1>

    <table>
        <thead>
            <tr>
                <th>Mês</th>
                <th>Eventos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Janeiro</td>
                <td>
                    <div class="evento">
                        <span contenteditable="true"><strong>01/01</strong> - Ano Novo</span>
                        <span class="remover" onclick="removerEvento(this)">x</span>
                    </div>
                    <button class="adicionar" onclick="adicionarEvento(this)">Adicionar Evento</button>
                </td>
            </tr>
            <!-- Repita a estrutura para os demais meses -->
        </tbody>
        <tbody>
            <tr>
                <td>Fev</td>
                <td>
                    <div class="evento">
                        <span contenteditable="true"><strong>01/01</strong> - Ano Novo</span>
                        <span class="remover" onclick="removerEvento(this)">x</span>
                    </div>
                    <button class="adicionar" onclick="adicionarEvento(this)">Adicionar Evento</button>
                </td>
            </tr>
            <!-- Repita a estrutura para os demais meses -->
    </tbody>
    </table>

    <script>
        function adicionarEvento(botao) {
            const td = botao.parentNode;
            const novoEvento = document.createElement('div');
            novoEvento.classList.add('evento');
            novoEvento.innerHTML = '<span contenteditable="true">Novo Evento</span><span class="remover" onclick="removerEvento(this)">x</span>';
            td.insertBefore(novoEvento, botao);
        }

        function removerEvento(span) {
            const evento = span.parentNode;
            evento.remove();
        }
    </script>

    v

</body>
</html>