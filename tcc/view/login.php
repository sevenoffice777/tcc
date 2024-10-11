<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rechanger Bus | Login </title>

    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/login.css">


</head>

<body>
    <div class="container">
        <div class="left">
            <div class="login-card">
                <h1>LOGIN</h1>
                <form id="verify-account-form" dataForm="../controller/model/login.php">
                    <label for="cpf_inpt">CPF</label>
                    <input type="text" name="cpf_user" id="cpf_user" class="inputs-prompt">
                    <label for="password_inpt">SENHA</label>
                    <input type="password" name="password_user" id="password-inpt" class="inputs-prompt">
                    <span id="lostPassword">ESQUECEU A SENHA?</span>
                    <button btn-sbmt id="btn-sbmt" name="btn-sbmt">Verificar Dados</button>
                    <a href="./signup.php" id="toCreateAccount">NÃO TEM CONTA?</a>
                </form>
            </div>
        </div>
        <div class="right-none">
            <div class="text">
                <span id="frase1-impacto">
                    Pronto para o proximo destino?
                </span>
                <span id="frase2-impacto">
                    O poder de se mover está em suas mãos
                </span>
            </div>
            <img src="../assets/onibus.png" id="onibus-canto" alt="Imagem do Onibus no Canto do Site">
        </div>
    </div>

    <footer>
        <div class="section-footer">
            <img src="../assets/logo.png" alt="LOGO">
            <button>Fale conosco</button>
            
        </div>
        <div class="section-footer">
            <h2>SEÇÕES</h2>
            <a href="">Quem Somos</a>
            <a href="">Nossos Serviços</a>
            <a href="">Contato</a>
            <a href="">Parcerias</a>
        </div>
        <div class="section-footer">
            <h2>SUPORTE</h2>
            <span class="info">Email:  rechangerbus@gmail.com</span>
            <span class="info">Telefone:  +55 14 91000-9923</span>
            <span class="info">CNPJ:  123141235124</span>
        </div>
        <div class="section-footer">
            <h2>RECHANGER BUS</h2>
            <hr>
            <span>"Facilitando seu dia-a-dia"</span>

        </div>
    </footer>
    
    <script src="../controller/ajax_requests/login.js"></script>
</body>

</html>