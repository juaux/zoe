<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Zoe</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
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
        textarea,
        input[type="password"] {
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

        .disabled-fields {
            display: none; /* Oculta os campos */
        }
    </style>
</head>
<body>
<body>


<div class="page-wrapper">
 	
    
    <!-- Main Header -->
    <header class="main-header">
    	<!--Header Top-->
        <div class="header-top">
        	<div class="container">
            	<div class="row clearfix">
                
                	<div class="col-md-6 col-sm-6 col-xs-12 top-left">
                    	<div class="clearfix">
                        	<div class="pull-left phone-num"><span class="icon flaticon-telephone51"></span>Call us : <a href="#">+49 123 456 789</a></div>
                            <div class="pull-left email"><span class="icon flaticon-mail115"></span>Send email : <a href="support@email.de">support@email.de</a></div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12 top-right">
                        <div class="social-links"><a href="#" class="fa fa-facebook-f"></a>  <a href="#" class="fa fa-instagram"></a> <a href="#" class="fa fa-youtube-play"></a></div>
                    </div>
                    
                </div>
            </div>
        </div>
        
      <!--Header Lower-->
      <?php include("menu.php"); ?>


      </header>
    <!--End Main Header -->
    
    
    <!--Sidebar Navigation-->
    <aside id="side-navigation">
    	<button type="button" class="toggle-nav"><span class="fa fa-bars"></span></button>
            
        <div class="sidebar-inner">
            <!--Logo-->
            <div class="logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
            
            <!--Main Navigation-->
            
        </div>
    </aside>
    <!--Sidebar Nav End-->
    
    
    <!--Bread Crumb-->
    <div class="bread-crumb">
    	<div class="auto-container">
        	Cursos  &ensp;<span class="fa fa-angle-right"></span>&ensp; <a href="#" class="ative">Cadastro</a>
        </div>
    </div>
    <?php 
      include('processa_cadastro.php');
     ?>
    <div class="container">
    <h2>Cadastro</h2>
        <form action="#" method="post">
            <div class="form-row">
                <div class="form-group">
                    <label for="curso">Curso:</label>
                    <select id="curso" name="curso">
                        <option value="">Selecione um curso</option>
                        <option value="Jiu Jitsu">Jiu Jitsu</option>
                        <option value="Capoeira">Capoeira</option>
                        <option value="Karatê">Karatê</option>
                        <option value="Informatica">Informatica</option>
                        <option value="Culinaria">Culinaria</option>
                        <option value="Moda">Moda</option>
                        <option value="Manutençao de micro">Manutençao de micro</option>           
                                               
                        <!-- Opções de cursos do banco de dados -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="dataCadastro">Data de Cadastro:</label>
                    <input type="text" id="dataCadastro" name="data" readonly value="<?php echo date('d/m/Y'); ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="nomeCompleto">Nome Completo:</label>
                    <input type="text" id="nomeCompleto" name="nome" placeholder="Digite seu nome completo">
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Data de Nascimento:</label>
                    <input type="text" id="dataNascimento" name="data_nasc" placeholder="DD/MM/AAAA">
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
            <div class="form-row disabled-fields" id="responsavelFields">
                <div class="form-group">
                    <label for="nomePai">Nome do Pai:</label>
                    <input type="text" id="nomePai" name="nome_pai" placeholder="Nome do Pai">
                </div>
                <div class="form-group">
                    <label for="nomeMae">Nome da Mãe:</label>
                    <input type="text" id="nomeMae" name="nome_mae" placeholder="Nome da Mãe">
                </div>
            </div>
            <div class="form-row disabled-fields" id="responsavelFields">
                <div class="form-group">
                    <label for="responsavel">Responsável:</label>
                    <input type="text" id="responsavel" name="responsavel" placeholder="Nome do Responsável">
                </div>
                <div class="form-group">
                    <label for="telefoneResponsavel">Telefone do Responsável:</label>
                    <input type="text" id="telefoneResponsavel" name="responsavel_tel   " placeholder="(00) 00000-0000">
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

            // Calcular idade e desabilitar campos
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

                    // Desabilitar campos se idade for maior que 18
                    if (idade >= 18) {
                        $("#responsavelFields").addClass("disabled-fields");
                    } else {
                        $("#responsavelFields").removeClass("disabled-fields");
                    }
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
