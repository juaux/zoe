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

    // Prepare and execute SQL statement
    $sql = "INSERT INTO professores (id, matricula, nome, telefone, email, datanasc, cpf, cep, 
    endereco, bairro, numero, cidade, estado, uf, sexo, curso, formacao, dataentrada, foto, foto_name) 
    VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssssssss", $matricula, $nome, $telefone, $email, $datanasc, $cpf, $cep, 
    $endereco, $bairro, $numero, $cidade, $estado, $uf, $sexo, $curso, $formacao, $dataentrada, $foto, $fotoName);

    if ($stmt->execute()) {
        echo "Professor cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o professor: " . $stmt->error;
    }

    $stmt->close();
}