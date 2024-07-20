<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Zoe</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
	
	<!-- Pick date -->
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.date.css">

</head>

<body>



    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

       
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
			
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Editar Profesxsor</h4>
                        </div>
                    </div>
                    
                </div>
				
				    
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
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignlab.com/" target="_blank">Skynet</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
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