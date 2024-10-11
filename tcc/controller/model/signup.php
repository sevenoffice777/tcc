<?php
header('Content-Type: application/json');

// Inicialize uma variável para a resposta
$response = [];

// Conexão com o banco de dados (ajuste conforme necessário)
$servername = "localhost"; // ou seu servidor
$username = "root";
$password = "";
$dbname = "rechangerBUs";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Erro de conexão ao banco de dados.']));
}

// Verifique se todas as variáveis foram enviadas
if (isset($_POST["username"]) && 
    isset($_POST["cpf_user"]) && 
    isset($_POST["dt_nasct"]) && 
    isset($_POST["cell_user"]) && 
    isset($_POST["email_user"]) && 
    isset($_POST["password_user"])) {

    // Coleta os dados do formulário
    $username = $_POST["username"];
    $cpf_user = $_POST["cpf_user"];
    $dt_nasct = $_POST["dt_nasct"];
    $cell_user = $_POST["cell_user"];
    $email_user = $_POST["email_user"];
    $password_user = password_hash($_POST["password_user"], PASSWORD_DEFAULT); // Hash da senha

    // Preparar a instrução SQL
    $stmt = $conn->prepare("INSERT INTO user (username, cpf_user, dt_nasct, cell_user, email_user, password_user) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $cpf_user, $dt_nasct, $cell_user, $email_user, $password_user);

    // Tentar inserir os dados
    if ($stmt->execute()) {
        $response = [
            'success' => true,
            'message' => 'Conta criada com sucesso!'
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Erro ao criar conta: ' . $stmt->error
        ];
    }

    // Fechar a instrução
    $stmt->close();
} else {
    $response = [
        'success' => false,
        'message' => 'Dados incompletos!'
    ];
}

// Fechar a conexão
$conn->close();

// Envia a resposta em formato JSON
echo json_encode($response);
?>
