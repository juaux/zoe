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

</head>
<body>

<php
Copiar
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

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

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
						<ul class="nav nav-pills mb-3">
							<li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">Exibição em Lista</a></li>
							<li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Exibição em Grade</a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
                                      <h4 class="card-title">Lista de Todos os professores  </h4>
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
														<th>sexo</th>
														<th>Telefone</th>
														<th>Email</th>
														<th>Data de entrada</th>
														<th>Ação</th>
													</tr>
												</thead>
												<tbody>
                                                <tbody>
                                                <?php
// Check if there are any results
if ($result->num_rows > 0) {
    // Loop through the results and populate the table
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><img src='" . $row['foto'] . "' alt=' foto' width='50' height='50'></td>";
        echo "<td>" . $row['matricula'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['curso'] . "</td>";
        echo "<td>" . $row['sexo'] . "</td>";
        echo "<td>" . $row['telefone'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['dataentrada'] . "</td>";
        echo "<td>
            <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-primary\"><i class=\"la la-pencil\"></i></a>
<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-id="<?php echo $row['id']; ?>"><i class="la la-trash-o"></i></a>
        </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='10'>No professors found.</td></tr>";
}
?>

$(document).ready(function() {
    $(".btn-danger").click(function() {
        var id = $(this).data("id");
        deleteRow(id);
    });

    $(".btn-primary").click(function() {
        var id = $(this).data("id");
        editRow(id);
    });
});

function deleteRow(id) {
    $.ajax({
        url: "delete_professor.php",
        type: "POST",
        data: { id: id },
        success: function(response) {
            // Remove the row from the table
            $("tr[data-id='" + id + "']").remove();
            // Display a success message or perform any other necessary actions
            alert("Professor deleted successfully!");
        },
        error: function() {
            alert("Error deleting professor!");
        }
    });
}

function editRow(id) {
    // Load the professor data into a form for editing
    $.ajax({
        url: "get_professor.php",
        type: "POST",
        data: { id: id },
        success: function(response) {
            // Populate the form fields with the professor data
            var professor = JSON.parse(response);
            $("#foto").val(professor.foto);
            $("#matricula").val(professor.matricula);
            $("#nome").val(professor.nome);
            $("#curso").val(professor.curso);
            $("#sexo").val(professor.sexo);
            $("#telefone").val(professor.telefone);
            $("#email").val(professor.email);
            $("#dataentrada").val(professor.dataentrada);
            // Add a hidden input field for the professor ID
            $("#professor_id").val(id);
            // Display the form for editing
            $("#edit-form").show();
        },
        error: function() {
            alert("Error loading professor data!");
        }
    });
}
    </tbody>	<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
														<td>Tiger Nixon</td>
														<td>Architect</td>
														<td>Male</td>
														<td>M.COM., P.H.D.</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/04/25</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>												
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Female</td>
														<td>M.COM., P.H.D.</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/07/25</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
														<td>Ashton Cox</td>
														<td>Junior Technical</td>
														<td>Male</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2009/01/12</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
														<td>Cedric Kelly</td>
														<td>Developer</td>
														<td>Male</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/03/29</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Female</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2008/11/28</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
														<td>Brielle Williamson</td>
														<td>Specialist</td>
														<td>Male</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/12/02</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
														<td>Herrod Chandler</td>
														<td>Sales Assistant</td>
														<td>Female</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/08/06</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
														<td>Rhona Davidson</td>
														<td>Integration</td>
														<td>Male</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/10/14</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
														<td>Colleen Hurst</td>
														<td>Javascript Developer</td>
														<td>Female</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2009/09/15</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
														<td>Sonya Frost</td>
														<td>Software Engineer</td>
														<td>Male</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2008/12/13</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
														<td>Jena Gaines</td>
														<td>Office Manager</td>
														<td>Female</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2008/12/19</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
														<td>Quinn Flynn</td>
														<td>Support Lead</td>
														<td>Male</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2013/03/03</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
														<td>Charde Marshall</td>
														<td>Regional Director</td>
														<td>Female</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2008/10/16</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
														<td>Haley Kennedy</td>
														<td>Senior Marketing</td>
														<td>Male</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/12/18</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
														<td>Tatyana Fitzpatrick</td>
														<td>Regional Director</td>
														<td>Male</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/03/17</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
														<td>Michael Silva</td>
														<td>Marketing Designer</td>
														<td>Female</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/11/27</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
														<td>Paul Byrd</td>
														<td>Financial Officer</td>
														<td>Male</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/06/09</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
														<td>Gloria Little</td>
														<td>Systems Administrator</td>
														<td>Female</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2009/04/10</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
														<td>Bradley Greer</td>
														<td>Software Engineer</td>
														<td>Male</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/10/13</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
														<td>Dai Rios</td>
														<td>Personnel Lead</td>
														<td>Male</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2012/09/26</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
														<td>Jenette Caldwell</td>
														<td>Development Lead</td>
														<td>Female</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/09/03</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
														<td>Yuri Berry</td>
														<td>Marketing Officer</td>
														<td>Male</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2009/06/25</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
														<td>Caesar Vance</td>
														<td>Pre-Sales Support</td>
														<td>Male</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/12/12</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
														<td>Doris Wilder</td>
														<td>Sales Assistant</td>
														<td>Female</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/09/20</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
														<td>Angelica Ramos</td>
														<td>Executive Officer</td>
														<td>Male</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2009/10/09</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
														<td>Gavin Joyce</td>
														<td>Developer</td>
														<td>Female</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/12/22</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
														<td>Jennifer Chang</td>
														<td>Regional Director</td>
														<td>Male</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/11/14</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
														<td>Brenden Wagner</td>
														<td>Software Engineer</td>
														<td>Female</td>
														<td>B.TACH, M.TACH</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/06/07</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
														<td>Fiona Green</td>
														<td>Operating Officer</td>
														<td>Male</td>
														<td>B.A, B.C.A</td>
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2010/03/11</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														<td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
														<td>Shou Itou</td>
														<td>Regional Marketing</td>
														<td>Female</td>
														<td>B.COM., M.COM.</td>
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														<td>2011/08/14</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
							<div id="grid-view" class="tab-pane fade col-lg-12">
								<div class="row">
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic2.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Alexander</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Gender :</span><strong>Male</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic3.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Elizabeth</h3>
													<p class="text-muted">B.COM., M.COM.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Gender :</span><strong>Female</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic4.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Amelia</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Gender :</span><strong>Female</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic5.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Charlotte</h3>
													<p class="text-muted">B.COM., M.COM.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Gender :</span><strong>Female</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic6.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Isabella</h3>
													<p class="text-muted">B.A, B.C.A</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Gender :</span><strong>Female</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic7.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Sebastian</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Gender :</span><strong>Male</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic8.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Olivia</h3>
													<p class="text-muted">B.COM., M.COM.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Gender :</span><strong>Female</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic9.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Emma</h3>
													<p class="text-muted">B.A, B.C.A</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Gender :</span><strong>Female</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic10.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Jackson</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Gender :</span><strong>Male</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Address:</span><strong>#8901 Marmora Road</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
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