<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rechanger Bus | Login </title>

    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/signup.css">


</head>

<body>
    <div class="container">
        <div class="left">
            <img src="../assets/anim-oni.jpg" alt="Animação Onibus" id="anim-oni">
        </div>
        <div class="right">

            <h1>CRIAR CONTA</h1>
            <form id="create-account-form" dataForm="../controller/model/signup.php">
                <label for="username">NOME</label>
                <input type="text" id="username" class="input" name="username">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf_user" class="input" name="cpf_user">
                <label for="dt_nasct">DATA DE NASCIMENTO</label>
                <input type="date" id="dt_nasct" class="input" name="dt_nasct">
                <label for="cell_user">TELEFONE</label>
                <input type="text" id="cell_user" class="input" name="cell_user">
                <label for="email_user">EMAIL</label>
                <input type="email" id="email_user" class="input" name="email_user">
                <label for="password">SENHA</label>
                <div class="password_inpt">
                    <input type="password" id="password_user" class="input" name="password_user">
                    <ion-icon name="eye-outline" id="hidden_password"></ion-icon>
                </div>
                <button btn-sbmt>Cadastre-se Aqui!</button>
                <a href="./login.php" id="quest-log">Já tem uma conta?</a>
            </form>

        </div>
    </div>


    <footer>
        <div class="section-footer">
            <img src="../assets/logo.png" alt="LOGO">
            <button>Fale conosco</button>

        </div>
        <div class="section-footer">
            <h2>SEÇÕES</h2>
            <a href="../../index.html#sobre">Quem Somos</a>
            <a href="../../index.html#servicos">Nossos Serviços</a>
            <a href="../../index.html#contato">Contato</a>
            <a href="../../index.html#parcerias">Parcerias</a>
        </div> 
        <div class="section-footer">
            <h2>SUPORTE</h2>
            <span class="info">Email: rechangerbus@gmail.com</span>
            <span class="info">Telefone: +55 14 91000-9923</span>
            <span class="info">CNPJ: 123141235124</span>
        </div>
        <div class="section-footer">
            <h2>RECHANGER BUS</h2>
            <hr>
            <span>"Facilitando seu dia-a-dia"</span>

        </div>
    </footer>

    <script>
        let isHid = false;
        document.querySelector("#hidden_password").addEventListener("click", ()=> {
            if(isHid == false) {
                document.querySelector("#password_user").setAttribute("type", "text")
                isHid = true;
            } else {
                document.querySelector("#password_user").setAttribute("type", "password")
                isHid = false;
            }

        })
    </script>

    <script src="../controller/ajax_requests/signup.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>