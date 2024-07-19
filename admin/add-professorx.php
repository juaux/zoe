<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:title" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:description" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:image" content="https://edumin.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/zoeicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/zoeicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Zoe</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.date.css">

</head>
<body>

   
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
     <?php include("head.php"); ?>

        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
             <?php include("procuraeicone.php"); ?>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <?php include("menu.php"); ?>

        <!--**********************************
            Sidebar end
        ***********************************-->

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Professores</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="add-professor.html">Professores</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Professor</a></li>
                        </ol>
                    </div>
                </div>
				

				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
						<div class="card">
							<div class="card-header">
							</div>
							<div class="card-body">
                                
							<form action="proconexao.php" method="POST">

                            <div class="form-group">
                            <label for="matricula">Matrícula:</label>
                                    <input type="text" id="matricula" name="matricula" readonly>
                                   
                                    <div class="row">

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Nome Completo</label>
												<input type="text"  name="nome" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telefone"> 
    </div>
</div>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email"> 
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">Data de Nascimento</label>
        <input name="datanasc" class="datepicker-default form-control" id="datepicker1" > 
    </div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">Cpf</label>
        <input type="text" class="form-control" name="cpf"> 
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">CEP</label>
        <input type="text" class="form-control" name="cep"> 
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">Endereço</label>
        <input type="text" class="form-control" name="endereco"> 
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">Bairro</label>
        <input type="text" class="form-control" name="bairro"> 
    </div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">Nº</label>
        <input type="text" class="form-control" name="numero"> 
    </div>
</div>	
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">Cidade</label>
        <input type="text" class="form-control" name="cidade"> 
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">Estado</label>
        <input type="text" class="form-control" name="estado"> 
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="form-group">
        <label class="form-label">UF</label>
        <input type="text" class="form-control" name="uf"> 
    </div>
</div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label class="form-label">Sexo</label>
            <select class="form-control" name="sexo"> 
                <option value=""></option>
                <option value="Male">Masculino</option>
                <option value="Female">Feminino</option>
            </select>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label class="form-label">Cursos</label>
            <select class="form-control" name="curso"> 
                <option value="Cursos">Cursos</option>
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="javascript">JavaScript</option>
                <option value="angular">Angular</option>
                <option value="angular">React</option>
                <option value="vuejs">Vue.js</option>
                <option value="ruby">Ruby</option>
                <option value="php">PHP</option>
                <option value="asp">ASP.NET</option>
                <option value="python">Python</option>
                <option value="mysql">MySQL</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label class="form-label">Formação</label>
            <input type="text" class="form-control" name="formacao"> 
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label class="form-label">Data de entrada</label>
            <input  name="dataentrada" class="datepicker-default form-control" id="datepicker"> 
        </div>
    </div>
</div>
<form method="post" enctype="multipart/form-data">
    <!-- Campos existentes -->
    <input type="file" name="foto" accept="image/*">
</form>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="submit" class="btn btn-light">Cancelar</button>
    </div>
    <script>
        // Função para gerar a matrícula
        function generateMatricula() {
            var matricula = "DO";
            for (var i = 0; i < 6; i++) {
                matricula += Math.floor(Math.random() * 10);
            }
            return matricula;
        }
        
        // Definir a matrícula no campo do formulário
        document.getElementById("matricula").value = generateMatricula();
    </script>
    
</div>
								</form>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignlab.com/" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!--  vendors -->
	<script src="vendor/global/global.min.js"></script>
	<!--0<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>-->
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>

	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>
	
	<!-- pickdate -->
    <script src="./vendor/pickadate/picker.js"></script>
    <script src="./vendor/pickadate/picker.time.js"></script>
    <script src="./vendor/pickadate/picker.date.js"></script>
	
	<!-- Pickdate -->
    <script src="./js/plugins-init/pickadate-init.js"></script>

</body>
</html>