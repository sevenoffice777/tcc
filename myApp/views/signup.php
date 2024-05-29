<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechanger Bus - Signup</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/general.css">
    <!-- Style Log In/ Sign Up -->
    <link rel="stylesheet" href="./styles/login.css">
</head>

<body>
    <div class="container fl-ali-center-jus-center">
        

        <div class="card fl-ali-center-jus-spcArd fl-drct-clmn">
            <img src="../assets/logo.png" alt="Logo Da Rechanger Bus" id="logo-form">
            <h1>Cadastre-se em <span class="marck">Rechanger Bus</span></h1>
            <form>
                <label for="username">Nome de Usuario</label>
                <input type="text">
                <label for="cpf">CPF do Usuário</label>
                <input type="text">
                <label for="password">Senha</label>
                <input type="password">
                <label for="dt_nasc">Data De Nascimento</label>
                <input type="date">
                <input type="submit" value="Cadastrar"class="btn">
            </form>
            <a href="./login.php">Já possui uma conta? Entrar!</a>
        </div>
    </div>




    <!-- Scripts -->
    <script src="./scripts/main.js"></script>

    <!-- Impotação -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>