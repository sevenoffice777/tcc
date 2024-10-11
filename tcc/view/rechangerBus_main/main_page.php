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
                    <div class="card_button" id="card_PIX">
                        <img src="../../assets/pix.png" alt="PIX IMAGEM">
                        <span class="txt_cards">PIX</span>
                    </div>
                    <div class="card_button" id="card_cartao">
                        <img src="../../assets/cartao.png" alt="PIX IMAGEM">
                        <span class="txt_cards">CARTÃO</span>
                    </div>
                    <div class="card_button" id="card_money">
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
                    <div class="cartao_onibus">
                        <div class="header_card">
                            <span id="tipo_cartao">ESTUDANTE</span>
                            <img src="../../assets/logo.png" alt="Logo Rechanger Bus">
                        </div>
                        <div class="main_card">
                            <div class="photo_user">
                                <img src="../../assets/person.png" alt="Pessoa Exemplo">
                            </div>
                            <div class="data_user">
                                
                                <span id="id_user"><span class="marck">Codigo Cartão:</span> 000000000</span>
                                <span id="nome_user"><span class="marck">Nome usuário:</span> Samuel Seven</span>
                                <span id="rg_user"><span class="marck">RG:</span> 00000000000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer>
        <div class="section-footer">
            <img src="../../assets/logo.png" alt="LOGO">
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

    <!-- Telas Extras -->

    <div class="contain_bg_PIX display_none">
        <div class="bg ">
            <div class="bg_card">
                <ion-icon name="close-outline" id="close_card"></ion-icon>
                <div class="left">
                    <h1>PIX</h1>
                    <div class="contain_dataPIX">
                        <span id="txt_pix">RECARGA</span>
                        <input type="number" id="valor_inpt">
                        <button id="getPix">GERAR PIX</button>
                        
                    </div>
                </div>
                <div class="right">
                    <img src="../../assets/anim_cel_hand.png" alt="Animação de um celular">
                </div>
            </div>
        </div>
   </div>
  


    <script>
        let close_card_pix = document.querySelector("#close_card");

        close_card_pix.addEventListener("click", ()=>{
            toggleClass(document.querySelector(".contain_bg_PIX"), "display_none");
        })

        document.querySelector("#card_PIX").addEventListener("click", ()=>{
            toggleClass(document.querySelector(".contain_bg_PIX"), "display_none");
        })


        function toggleClass(classVerify, classRemove) {
            if(classVerify.classList.contains(classRemove)) {
                classVerify.classList.remove(classRemove);
            } else {
                classVerify.classList.add(classRemove);
            }
        }
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>