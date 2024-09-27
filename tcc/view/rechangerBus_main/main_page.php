<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rechanger Bus | Inicio </title>

    <link rel="stylesheet" href="../../styles/mainpage.css">
    <link rel="stylesheet" href="../../styles/reset.css">

    <link rel="shortcut icon" href="../../assets/logo.png" type="image/x-icon">

</head>

<body>
    <div class="container">
        <header>
            <div class="saldo_box">
                <span class="txt_saldo">SALDO</span>
                <span id="saldo_log">R$ 00,00 </span>
                <img src="../../assets/reverse_icon.png" alt="Rerverse Icon" id="reverse_icon">
            </div>
            <div class="user_box">
                <ion-icon name="cog-outline"></ion-icon>
                <ion-icon name="person-circle-outline"></ion-icon>
            </div>
        </header>
        <main>
            <div class="left">
                <span class="txt_span">RECARREGAR</span>
                <div class="contain_buttons">
                    <div class="card_button">
                        <img src="../../assets/pix.png" alt="PIX IMAGEM">
                        <span class="txt_cards">PIX</span>
                    </div>
                    <div class="card_button">
                        <img src="../../assets/cartao.png" alt="PIX IMAGEM">
                        <span class="txt_cards">CARTÃO</span>
                    </div>
                    <div class="card_button">
                        <img src="../../assets/money.png" alt="MONEY IMAGEM">
                        <span class="txt_cards">DINHEIRO</span>
                    </div>
                </div>
                <span class="txt_span">
                    CONSULTAR HORARIOS
                </span>
                <div class="contain_inputs">
                    <input type="text" name="from" id="from_input" placeholder="ESTOU EM: ">

                    <input type="text" name="to" id="to_input" placeholder="INDO PARA: ">
                </div>
            </div>
            <div class="right">
                <div class="contain_card">
                    <div class="card">

                    </div>
                </div>
            </div>
        </main>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>