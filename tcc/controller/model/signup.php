<?php
header('Content-Type: application/json');

// Inicialize uma variável para a resposta
$response = [];

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
    $password_user = $_POST["password_user"];

    // Adiciona os valores ao array de resposta
    $response = [
        'success' => true,
        'message' => 'Conta criada com sucesso!',
        'data' => [
            'username' => $username,
            'cpf_user' => $cpf_user,
            'dt_nasct' => $dt_nasct,
            'cell_user' => $cell_user,
            'email_user' => $email_user,
            'password_user' => $password_user // Note que não é recomendado retornar senhas
        ]
    ];
} else {
    // Resposta caso alguma variável não esteja definida
    $response = [
        'success' => false,
        'message' => 'Dados incompletos!'
    ];
}

// Envia a resposta em formato JSON
echo json_encode($response);
?>
