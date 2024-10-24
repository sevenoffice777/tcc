window.onload = () => {
    fetch("../../controller/model/dataUser.php")
        .then(response => {
            if (!response.ok) {
                throw new Error("Erro (Dados Inválidos!)");
            }
            console.log("Dados Coletados com sucesso!");
            return response.json(); // Retorna os dados JSON
        })
        .then(data => {
            console.log(data);

            let id_cartao = document.querySelector("#id_user");
            let nome_user = document.querySelector("#nome_user");
            let cpf_user= document.querySelector("#cpf_user");
            let saldo_user = document.querySelector("#saldo_log")

            id_cartao.textContent = data.cartao;
            nome_user.textContent = data.username;
            cpf_user.textContent = data.cpf_user;
            saldo_user.textContent = `R$ ${data.saldo_user}`;
            
        })
        .catch(error => {
            console.error(error);
        });
};
