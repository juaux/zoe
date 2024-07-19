<?php
    include("conexao.php"); // Assuming "conexao.php" establishes your database connection

    // UPDATE statement (secure and prepared)
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $cpf = $_POST['cpf'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $uf = $_POST['uf'];
        $sexo = $_POST['sexo'];
        $curso = $_POST['curso'];
        $formacao = $_POST['formacao'];
        $data_entrada = $_POST['data_entrada'];
        $foto = $_POST['foto']; // Assuming 'foto' is the name of the input field

        $sql = "UPDATE professores SET nome=?, telefone=?, email=?, data_nasc=?, cpf=?, cep=?, endereco=?, bairro=?, numero=?, cidade=?, estado=?, uf=?, sexo=?, curso=?, formacao=?, data_entrada=?, foto=? WHERE id=?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("", $nome, $telefone, $email, $data_nasc, $cpf, $cep, $endereco, $bairro, $numero, $cidade, $estado, $uf, $sexo, $curso, $formacao, $data_entrada, $foto, $id);

        if ($stmt->execute()) {
            echo "Dados atualizados com sucesso!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    // INSERT statement (secure and prepared)
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $cpf = $_POST['cpf'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $uf = $_POST['uf'];
        $sexo = $_POST['sexo'];
        $curso = $_POST['curso'];
        $formacao = $_POST['formacao'];
        $dataentrada = $_POST['dataentrada'];
        $foto = $_POST['foto']; // Assuming 'foto' is the name of the input field

        $sql = "INSERT INTO professores (nome, telefone, email, data_nasc, cpf, cep, endereco, bairro, numero, cidade, estado, uf, sexo, curso, formacao, dataentrada, foto) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssssssssssssssss", $nome, $telefone, $email, $data_nasc, $cpf, $cep, $endereco, $bairro, $numero, $cidade, $estado, $uf, $sexo, $curso, $formacao, $dataentrada, $foto);

        if ($stmt->execute()) {
            ?>
                <div style="text-align:center; width:100%; padding:10px; margin-bottom:30px; background: rgb(75 181 118); color:#fff;">
                    <div style="display:inline-block;">Cadastro realizado com sucesso!</div>
                </div>
            <?php
        } else {
            ?>
                <div style="text-align:center; width:100%; padding:10px; margin-bottom:30px; background: red; color:#fff;">
                    <div style="display:inline-block;">Ocorreu um erro!<br/><?php echo $stmt->error;?></div>
                </div>
            <?php
        }
        $stmt->close();
    }
?>