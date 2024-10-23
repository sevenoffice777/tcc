<?php
session_start();

$response;

if (!isset($_SESSION["cpf"])) {
    echo json_encode(["error" => "Sessão não disponível"]);
    exit;
}

$cpf = $_SESSION["cpf"];

// Conexão com o banco de dados
$servername = "localhost"; // Ex: "localhost"
$username = "root"; // Ex: "root"
$password = ""; // Ex: ""
$dbname = "rechangerBus"; // Ex: "meu_db"

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Prepara e executa a consulta
$sql = "SELECT username, cpf_user, cartao FROM user WHERE cpf_user = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cpf); // "s" significa que o parâmetro é uma string
$stmt->execute();
$result = $stmt->get_result();

$response = [];

if ($result->num_rows > 0) {
    // Obtém os dados como um array associativo
    $response = $result->fetch_assoc();
} else {
    $response = ["error" => "Nenhum dado encontrado"];
}

// Fecha a conexão
$stmt->close();
$conn->close();




header('Content-Type: application/json'); // Define o tipo de conteúdo como JSON
echo json_encode($response);
?>
