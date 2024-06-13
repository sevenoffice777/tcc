<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechanger Bus | </title>
    <!-- Incrementado com o nome do cliente posteriormente com algoritmo de inserção ja implementado em outro projeto -->

    <link rel="stylesheet" href="./styles/general.css">
    <link rel="stylesheet" href="./styles/inicio.css">
    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
</head>

<body>

    <header>
        <div class="box-logo">
            <img src="../assets/logo_completa.png" alt="Logo da Rechanger Bus" class="logo">
        </div>
        <ion-icon name="menu-outline"></ion-icon>
    </header>
    <div class="container">
        <section class="inicial-user">
            <div class="left">
                <h1>Recarregue Aqui</h1>
                <div class="contain-cards">
                    <div class="card">
                        <img src="../assets/pix_icon.png" alt="Icone do PIX">
                        <span>PIX</span>
                    </div>
                    <div class="card">
                        <img src="../assets/money_icon.png" alt="Icone do Dinheiro">
                        <span>DINHEIRO</span>
                    </div>
                    <div class="card">
                        <img src="../assets/cartao.png" alt="Icone de Cartao">
                        <span>CARTÃO</span>
                    </div>
                </div>
                <form>
                    <label for="horario">Horário</label>
                    <input type="text" name="localtime" id="localtime-ipt">
                    <label for="">Linha de Onibus</label>
                    <input type="text" name="bus-line" id="bus-line-ipt">
                </form>
            </div>
            <div class="right">
                <div class="buscard">

                </div>
            </div>
            <footer></footer>
        </section>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>