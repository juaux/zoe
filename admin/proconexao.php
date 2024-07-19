<?php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$datanasc = $_POST["datanasc"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$numero = $_POST["numero"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$uf = $_POST["uf"];
$sexo = $_POST["sexo"];
$curso = $_POST["curso"];
$formacao = $_POST["formacao"];
$dataentrada = $_POST["dataentrada"];

// Verifica se a foto foi enviada
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto = file_get_contents($_FILES['foto']['tmp_name']);
    $fotoName = $_FILES['foto']['name'];
} else {
    $foto = null;
    $fotoName = null;
}
$foto = !empty($foto) ? $foto : '';


    // Prepare and execute SQL statement
    $sql = "INSERT INTO professores (id, matricula, nome, telefone, email, datanasc, cpf, cep, 
    endereco, bairro, numero, cidade, estado, uf, sexo, curso, formacao, dataentrada, foto) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssssssss", $matricula, $nome, $telefone, $email, $datanasc, $cpf, $cep, 
    $endereco, $bairro, $numero, $cidade, $estado, $uf, $sexo, $curso, $formacao, $dataentrada, $foto);

    if ($stmt->execute()) {
        //  echo "Novo usuário cadastrado com sucesso!";
        ?>
        <div style="text-align:center; width:100%; padding:10px; margin-bottom:30px; background: rgb(75 181 118); color:#fff;">
            <div style="display:inline-block;">Cadastro realizado com sucesso!</div>
        </div>
    <?php
    } else {
        echo "Erro: " . $stmt->error;
        ?>
            <div style="text-align:center; width:100%; padding:10px; margin-bottom:30px; background: red; color:#fff;">
                <div style="display:inline-block;">Ocorreu um erro!<br/><?php echo $error;?></div>
            </div>
        <?php
    }
    
    $stmt->close();
}

$conn->close();

?>
