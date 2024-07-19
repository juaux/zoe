
<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    // Generate a random 8-digit matriculation number
    $matricula = rand(10000000, 99999999);

    // Check if the matriculation number is already in use (optional)
    $sql_check = "SELECT * FROM professores WHERE matricula = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("i", $matricula);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // Matriculation number already exists, generate a new one
        $matricula = rand(10000000, 99999999);
    }

    // Prepare and execute SQL statement
    $sql = "INSERT INTO professores (id, nome, telefone, email, matricula) VALUES (NULL, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $telefone, $email, $matricula);

    if ($stmt->execute()) {
        //  echo "Novo usuário cadastrado com sucesso!";
        ?>
        <div style="text-align:center; width:100%; padding:10px; margin-bottom:30px; background: rgb(75 181 118); color:#fff;">
            <div style="display:inline-block;">Cadastro realizado com sucesso! Matrícula: <?php echo $matricula; ?></div>
        </div>
    <?php
    } else {
        echo "Erro: " . $stmt->error;
        ?>
            <div style="text-align:center; width:100%; padding:10px; margin-bottom:30px; background: red; color:#fff;">
                <div style="display:inline-block;">Ocorreu um erro!<br/><?php echo $error;?></div>
            </div>
        <?php
    }
    
    $stmt->close();
}

$conn->close();

?>