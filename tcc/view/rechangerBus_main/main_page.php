<!DOCTYPE html>
<html lang="pt-BR">

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
                    <div class="card_button" data-target="card_PIX">
                        <img src="../../assets/pix.png" alt="PIX IMAGEM">
                        <span class="txt_cards">PIX</span>
                    </div>
                    <div class="card_button" data-target="card_cartao">
                        <img src="../../assets/cartao.png" alt="PIX IMAGEM">
                        <span class="txt_cards">CARTÃO</span>
                    </div>
                    <div class="card_button" data-target="card_money">
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

    <!-- Telas Extras -->

    <div class="contain_bg display_none" id="card_PIX">
        <div class="bg">
            <div class="bg_card">
                <ion-icon name="close-outline" class="close_card"></ion-icon>
                <div class="left">
                    <h1>PIX</h1>
                    <div class="contain_data">
                        <span id="txt_contain_data">RECARGA</span>
                        <input type="number" id="valor_inpt">
                        <button id="getTransaction">GERAR PIX</button>

                    </div>
                </div>
                <div class="right">
                    <img src="../../assets/imagens/mao_qrcode.png" alt="Animação de um celular">
                </div>
            </div>
        </div>
    </div>

    <div class="contain_bg display_none" id="card_cartao">
        <div class="bg">
            <div class="bg_card">
                <ion-icon name="close-outline" class="close_card"></ion-icon>
                <div class="left">
                    <h1>CARTÃO</h1>
                    <div class="contain_data">
                        <span id="txt_contain_data">RECARGA</span>
                        <input type="number" id="valor_inpt">
                        <button id="getTransaction">EFETUAR PAGAMENTO</button>

                    </div>
                </div>
                <div class="right">
                    <div class="bank-card">

                        <form class="card-form">
                            <label for="name">Nome do Titular</label>
                            <input type="text" id="name" placeholder="Nome Completo" required>

                            <label for="card-number">Número do Cartão</label>
                            <input type="text" id="card-number" placeholder="XXXX XXXX XXXX XXXX" required>

                            <label for="expiry">Data de Validade</label>
                            <input type="text" id="expiry" placeholder="MM/AA" required>

                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" placeholder="XXX" required>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contain_bg display_none" id="card_money">
        <div class="bg bg_recarga">
            <div class="bg_card">
                <ion-icon name="close-outline" class="close_card"></ion-icon>
                <div class="left">
                    <h1>Pontos de Recarga</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8778.310163124954!2d-49.07783020156385!3d-22.322465772927398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf67babdf633db%3A0xf48c1eea36d8b9eb!2sTransurb%20Bauru!5e0!3m2!1spt-BR!2sbr!4v1729253357917!5m2!1spt-BR!2sbr"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="right">
                    <div class="pontos_recarga">
                        <p class="ponto">
                            <span class="marck">Livraria Jalovi</span>
                            Avenida Rodrigues Alves, 6-34; Centro;
                            de segunda a sexta-feira das 08h30 às 11h00 e das 13h às 18 horas,
                            aos sábados das 09h30 às 13h e das 14h às 17 horas




                        </p>
                        <p class="ponto">
                            <span class="marck">Confiança Max</span>
                            Avenida Getúlio Vargas, 3-30; Jardim Estoril
                            de segunda a sexta-feira das 08h30 às 11h00 e das 12h30 às 18 horas,
                            aos sábados das 09h00 às 13 horas.
                        </p>
                        <p class="ponto">
                            <span class="marck">Empório Cultural ( Bauru Shopping)</span>
                            R. Henrique Savi, 15-55; Jd.Planalto;
                            de segunda a sexta-feira das 10h00 às 18h00 horas.
                            aos sábados das 10 às 14h00 horas.



                        </p>
                        <p class="ponto">
                            <span class="marck">Lanchonete Mister Mix</span>
                            Av. Rodrigues Alves, 10-05; Centro;
                            de segunda a sexta-feira das 6 às 17h30 horas.
                            aos sábados das 6 às 12 horas
                        </p>
                        <p class="ponto">
                            <span class="marck">Rede Inova Gasparini (Via Farma)</span>
                            Rua dos Comérciarios, 3-98; Gasparini;
                            de segunda a sexta das 8 às 18 horas
                            Aos sábados 8 as 12:30




                        </p>
                        <p class="ponto">
                            <span class="marck">Drogaria Farmais</span>
                            Rua: Campos Salles, 7-40, Vila Falcão
                            de segunda a sexta-feira, das 08:30 as 18 horas,
                            aos sábados das 9h às 13horas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        let card_click = document.querySelectorAll(".card_button")
        let card_bg = document.querySelectorAll(".contain_bg");
        let close_button = document.querySelectorAll(".close_card");

        card_click.forEach((button) => {
            button.addEventListener("click", () => {
                let bg = document.getElementById(button.getAttribute("data-target"));
                toggleClass(bg, "display_none")

            });
        });

        close_button.forEach((clos_button) => {
            clos_button.addEventListener("click", () => {
                let bg = document.getElementById(clos_button.closest(".contain_bg").getAttribute("id"));
                toggleClass(bg, "display_none")
            });
        });

        function toggleClass(classVerify, classRemove) {
            if (classVerify.classList.contains(classRemove)) {
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