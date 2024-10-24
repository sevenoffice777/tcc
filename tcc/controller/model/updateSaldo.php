<?php
session_start(); // Inicia a sessão
header('Content-Type: application/json');

// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rechangerBus";

// Conecta ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die(json_encode(["error" => "Falha na conexão: " . $conn->connect_error]));
}

// Obtém os dados enviados em formato JSON
$data = json_decode(file_get_contents('php://input'), true);
$novoSaldo = $data['novoSaldo'];

// Certifique-se de que a variável de sessão existe
if (!isset($_SESSION["cpf"])) {
    echo json_encode(["error" => "Usuário não autenticado."]);
    exit;
}

// Obtém o CPF do usuário da sessão
$cpf = $_SESSION["cpf"];

// Atualiza o saldo no banco de dados
$query = "UPDATE user SET saldo_user = ? WHERE cpf = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ds", $novoSaldo, $cpf);

if ($stmt->execute()) {
    // Se a atualização for bem-sucedida, busca o novo saldo
    $query = "SELECT saldo_user FROM user WHERE cpf = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $stmt->bind_result($saldoAtualizado);
    $stmt->fetch();

    // Retorna o novo saldo em formato JSON (sem "R$")
    echo json_encode(['novoSaldo' => $saldoAtualizado]);
} else {
    echo json_encode(["error" => "Erro ao atualizar o saldo: " . $stmt->error]);
}

// Fecha a conexão
$stmt->close();
$conn->close();
?>
