<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechanger Bus - Log in</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/login.css">
</head>

<body>
    <div class="container fl-ali-center-jus-center">
       

        <div class="card fl-ali-center-jus-spcArd fl-drct-clmn">
            <img src="../assets/logo.png" alt="Logo Da Rechanger Bus" id="logo-form">
            <h1>Conecte-se com <span class="marck">Rechanger Bus</span></h1>
            <form>
                <label for="username">CPF</label>
                <input type="text" id="username" name="username">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" >
                <input type="submit" id="btn_login" class="btn" placeholder="ENTRAR">
            </form>
            <a href="./signup.php">Não tem uma conta? Cadastre-se!</a>
        </div>
    </div>




    <!-- Scripts -->
    <script src="./scripts/main.js"></script>

    <!-- Impotação -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>