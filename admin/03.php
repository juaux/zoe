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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professor List</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
    }
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
    .action-buttons {
      display: flex;
      justify-content: center;
    }
    .action-buttons button {
      margin: 0 5px;
    }
  </style>
</head>
<body>
  <h1>Professor List</h1>
  <table>
    <thead>
      <tr>
        <th>Foto</th>
        <th>Matrícula</th>
        <th>Nome</th>
        <th>Curso</th>
        <th>Gênero</th>
        <th>Formação</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Data de Entrada</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Check if there are any results
      if ($result->num_rows > 0) {
          // Loop through the results and populate the table
          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td><img src='" . $row['foto'] . "' alt='Professor Photo' width='50' height='50'></td>";
              echo "<td>" . $row['matricula'] . "</td>";
              echo "<td>" . $row['nome'] . "</td>";
              echo "<td>" . $row['curso'] . "</td>";
              echo "<td>" . $row['sexo'] . "</td>";
              echo "<td>" . $row['formacao'] . "</td>";
              echo "<td>" . $row['telefone'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['dataentrada'] . "</td>";
              echo "<td>";
              echo "<div class='action-buttons'>";
              echo "<button>Edit</button>";
              echo "<button>Delete</button>";
              echo "</div>";
              echo "</td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='10'>No professors found.</td></tr>";
      }
      ?>
    </tbody>
  </table>

  <?php
  // Close the database connection
  $conn->close();
  ?>
</body>
</html>