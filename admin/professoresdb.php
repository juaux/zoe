<?php
    include("conexao.php");



    if(isset($_POST['id'])){

        extract($_POST);
        
        mysqli_query($con, "UPDATE professores SET nome='$nome' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET telefone='$telefone' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET email='$email' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET data_nasc='$data_nasc' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET cpf='$cpf' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET cep='$cep' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET endereco='$endereco' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET bairro='$bairro' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET numero='$numero' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET cidade='$cidade' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET estado='$estado' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET uf='$uf' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET sexo='$sexo' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET curso='$curso' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET formacao='$formacao' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET data_entrada='$data_entrada' WHERE id='$id'");
        mysqli_query($con, "UPDATE professores SET foto='$foto' WHERE id='$id'");

        echo "Dados atualizados com sucesso!";

    }else if(isset($_POST['nome'])){
        extract($_POST);
        $qr = "INSERT INTO professores (nome,
                                    telefone,
                                    email,
                                    data_nasc,
                                    cpf,
                                    cep,
                                    endereco,
                                    bairro,
                                    numero
                                    cidade,
                                    estado,
                                    uf,
                                    sexo,
                                    curso,
                                    formacao,
                                    dataentrada,
                                    foto) VALUES ( '$nome', 
                                                   '$telefone', 
                                                   '$email', 
                                                   '$data_nasc', 
                                                   '$cpf', 
                                                   '$cep', 
                                                   '$endereco', 
                                                   '$bairro', 
                                                   '$numero', 
                                                   '$cidade', 
                                                   '$estado', 
                                                   '$uf', 
                                                   '$sexo, 
                                                   '$curso', 
                                                   '$formacao', 
                                                   '$dataentrada', 
                                                   '$foto')";
    
        $ok = mysqli_query($con, $qr);
        $error = mysqli_error($con);
        if($ok){
            ?>
                <div style="text-align:center; width:100%; padding:10px; margin-bottom:30px; background: rgb(75 181 118); color:#fff;">
                    <div style="display:inline-block;">Cadastro realizado com sucesso!</div>
                </div>
            <?php
        }else{
            ?>
                <div style="text-align:center; width:100%; padding:10px; margin-bottom:30px; background: red; color:#fff;">
                    <div style="display:inline-block;">Ocorreu um erro!<br/><?php echo $error;?></div>
                </div>
            <?php
        }

    }
