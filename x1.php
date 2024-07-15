<?php

session_start(); // Iniciar a sessao

// Incluir a conexao com BD
include "conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke</title>
</head>

<body>
    <a href="x1.php">Listar</a><br>

    <h2>Listar os Usuários</h2>

    <?php

    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $query_usuarios = "SELECT id, nome FROM usuarios ORDER BY id DESC";
    $result_usuarios = $con->prepare($query_usuarios);
    $result_usuarios->execute();

    while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_usuario);
        extract($row_usuario);
        //echo "ID: " . $row_usuario['id'] . "<br>";
        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "<hr>";
    }
    ?>

</body>

</html>