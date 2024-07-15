<?php
    include("conexao.php");



    if(isset($_POST['id'])){

        extract($_POST);
        
        mysqli_query($con, "UPDATE alunos SET curso='$curso' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET data='$data' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET nome='$nome' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET data_nasc='$data_nasc' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET idade='$idade' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET rg='$rg' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET cpf='$cpf' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET cep='$cep' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET endereco='$endereco' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET bairro='$bairro' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET cidade='$cidade' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET uf='$uf' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET telefone='$telefone' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET email='$email' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET nome_pai='$nome_pai' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET nome_mae='$nome_mae' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET responsavel='$responsavel' WHERE id='$id'");
        mysqli_query($con, "UPDATE alunos SET responsavel_tel='$responsavel_tel' WHERE id='$id'");

        echo "Dados atualizados com sucesso!";

    }else if(isset($_POST['nome'])){
        extract($_POST);
        $qr = "INSERT INTO cad_alunos (curso,
                                    data,
                                    nome,
                                    data_nasc,
                                    idade,
                                    rg,
                                    cpf,
                                    cep,
                                    endereco,
                                    bairro,
                                    cidade,
                                    uf,
                                    telefone,
                                    email,
                                    nome_pai,
                                    nome_mae,
                                    responsavel,
                                    responsavel_tel,
                                    senha,
                                    senha_rec) VALUES ('$curso',
                                                            '$data',
                                                            '$nome',
                                                            '$data_nasc',
                                                            '$idade',
                                                            '$rg',
                                                            '$cpf',
                                                            '$cep',
                                                            '$endereco',
                                                            '$bairro',
                                                            '$cidade',
                                                            '$uf',
                                                            '$telefone',
                                                            '$email',
                                                            '$nome_pai',
                                                            '$nome_mae',
                                                            '$responsavel',
                                                            '$responsavel_tel',
                                                            '".md5($senha)."',
                                                            '$senha')";
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
