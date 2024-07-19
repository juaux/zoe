<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professores</title>
    <style>
        body {
            font-family: sans-serif;
        }
        form {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>Cadastro de Professores</h2>

    <form action="proconexao.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" >

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" >

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >

        <label for="datanasc">Data de Nascimento:</label>
        <input type="date" id="datanasc" name="datanasc" >

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" >

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" >

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" >

        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro" >

        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" >

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" >

        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" >

        <label for="uf">UF:</label>
        <input type="text" id="uf" name="uf" >

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" >
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" >

        <label for="formacao">Formação:</label>
        <input type="text" id="formacao" name="formacao" >

        <label for="dataentrada">Data de Entrada:</label>
        <input type="date" id="dataentrada" name="dataentrada" >

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>