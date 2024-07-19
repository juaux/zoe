<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Professores</title>
    <style>
        input[type="text"], input[type="email"], input[type="tel"] {
            border: none; /* Remove border */
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

    <h2>Cadastro de Professor</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" id="telefone" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>