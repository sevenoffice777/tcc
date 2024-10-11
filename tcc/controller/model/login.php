<?php
header('Content-Type: application/json');

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

// Inicialize uma variável para a resposta
$response = [];

// Verifique se os dados do formulário foram enviados
if (isset($_POST["cpf_user"]) && isset($_POST["password_user"])) {
    
    $cpf_user = $_POST["cpf_user"];
    $password_user = $_POST["password_user"];
    
    // Prepare a instrução SQL para buscar o usuário
    $stmt = $conn->prepare("SELECT password_user FROM user WHERE cpf_user = ?");
    $stmt->bind_param("s", $cpf_user);
    $stmt->execute();
    
    $stmt->store_result();
    
    // Verifica se o usuário existe
    if ($stmt->num_rows > 0) {
        // O usuário existe, busca a senha
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        
        // Verifica a senha
        if (password_verify($password_user, $hashed_password)) {
            // Senha correta
            $response = [
                'success' => true,
                'message' => 'Login bem-sucedido!'
            ];
        } else {
            // Senha incorreta
            $response = [
                'success' => false,
                'message' => 'Senha incorreta!'
            ];
        }
    } else {
        // Usuário não encontrado
        $response = [
            'success' => false,
            'message' => 'Usuário não encontrado!'
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
