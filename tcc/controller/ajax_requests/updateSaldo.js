document.querySelector("#getTransaction").addEventListener("click", () => {
    let saldoSpan = document.querySelector("#saldo_log"); 
    let saldoNumerico = parseFloat(saldoSpan.textContent.replace("R$", "").replace(",", ".").trim());
    let valor_recarga = parseFloat(document.querySelector("#valor_inpt").value);
    let saldoAtualizar = saldoNumerico+valor_recarga;

    fetch("../../controller/model/updateSaldo.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ novoSaldo: saldoAtualizar })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Erro ao atualizar o saldo.");
        }
        return response.json();
    })
    .then(data => {
        // Aqui você recebe o novo saldo do banco de dados
        let novoSaldo = parseFloat(data.novoSaldo.replace("R$", "").replace(",", ".").trim());
        
        // Atualiza o elemento na interface
        document.querySelector("#saldo_log").textContent = `R$${novoSaldo.toFixed(2).replace(".", ",")}`;
        

    });
});