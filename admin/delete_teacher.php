<?php
$matricula = $_GET['matricula'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoe";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    http_response_code(500);
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM professores WHERE matricula = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $matricula);

if ($stmt->execute()) {
    http_response_code(200);
    echo "Professor excluído com sucesso";
} else {
    http_response_code(500);
    echo "Erro ao excluir o professor: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>