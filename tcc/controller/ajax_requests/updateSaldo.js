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
        alert("Recarga Realizada com Sucesso")
        
       window.location.reload(true)
    })
    
    
});