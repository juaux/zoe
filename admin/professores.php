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
	<link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

</head>


<script>
    $(document).ready(function() {
      // Captura o clique em qualquer linha da tabela
      $('#example3 tbody tr').click(function() {
        // Obtém os dados da linha clicada
        var matricula = $(this).find('td:nth-child(2)').text();
        var nome = $(this).find('td:nth-child(3)').text();
        var curso = $(this).find('td:nth-child(4)').text();
        // ... obtenha os outros dados da linha ...

        // Passa os dados para a página modal
        $('#editModal iframe').attr('src', 'editprofessor.php?matricula=' + matricula + '&nome=' + nome + '&curso=' + curso + '...');

        // Abre o modal
        $('#editModal').modal('show');
      });
    });
  </script>
<body>

    

   
    <div id="main-wrapper">

       
               <?php include("head.php"); ?>

     
             <?php include("procuraeicone.php"); ?>

       
        <?php include("menu.php"); ?>

            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                        
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4>professores</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            </ol>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="row tab-content">
                                <div id="list-view" class="tab-pane fade active show col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                        <h4 class="card-title"> </h4>
                                    <a href="add-professor.html" class="btn btn-primary">+ Novo</a>
                                </div>
                                
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Matrícula</th>
                                                    <th>Nome</th>
                                                    <th>Curso</th>
                                                    <th>Sexo</th>
                                                    <th>Telefone</th>
                                                    <th>Email</th>
                                                    <th>Data de Entrada</th>
                                                    <th>Ação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                <?php
                // PHP code to fetch data from the database and populate the table
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "zoe";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM professores";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><img src='" . $row['foto'] . "' alt='foto' width='50' height='50'></td>";
                        echo "<td>" . $row['matricula'] . "</td>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['curso'] . "</td>";
                        echo "<td>" . $row['sexo'] . "</td>";
                        echo "<td>" . $row['telefone'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['dataentrada'] . "</td>";
                        echo "<td>
                            <a href='#' class='btn btn-sm btn-primary edit-btn' data-target='#editModal' data-toggle='modal'><i class='la la-pencil'></i></a>
                            <a href='#' class='btn btn-sm btn-danger delete-btn' data-id='" . $row['matricula'] . "' onclick='deleteTeacher(this)'><i class='la la-trash-o'></i></a>
                        </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>Nenhum professor encontrado.</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        
    <!-- Restante do código HTML -->
    </table>
    <script src="script.js"></script>
    </div>

    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document"> <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Editar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <!-- Conteúdo da página 'tesdit.html' -->
            <iframe src="editprofessor.php" width="100%" height="600px"></iframe>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </div>
        </div>
    </div>


    </div>
    </div>

                                            </tbody>
                                        </table>
                                    </div>

                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </head>
    <body>

    <php

    <?php
    // Database connection details
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "zoe";

    // Connect to the database
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve professor data
    $sql = "SELECT * FROM professores";
    $result = $conn->query($sql);
    ?>

    

            Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
                Nav header start
            ***********************************-->
                <?php include("head.php"); ?>

                <?php include("procuraeicone.php"); ?>

        
            <?php include("menu.php"); ?>

        
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="http://dexignlab.com/" target="_blank">Skynet</a> 2021</p>
                </div>
            </div>
        
        </div>

        <!-- Required vendors -->
        <script src="vendor/global/global.min.js"></script>
        <!--<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>-->
        <script src="js/custom.min.js"></script>
        <script src="js/dlabnav-init.js"></script>	
        
        <!-- Datatable -->
        <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="./js/plugins-init/datatables.init.js"></script>
        
        <!-- Svganimation scripts -->
        <script src="vendor/svganimation/vivus.min.js"></script>
        <script src="vendor/svganimation/svg.animation.js"></script>
        <script src="js/styleSwitcher.js"></script>
        
    </body>
    </html>