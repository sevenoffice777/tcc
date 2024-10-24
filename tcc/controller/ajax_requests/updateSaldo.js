document.querySelector("#getTransaction").addEventListener("click", () => {
    let saldoSpan = document.querySelector("#saldo_log"); 
    let saldoNumerico = parseFloat(saldoSpan.textContent.replace("R$", "").replace(",", ".").trim());
    let valor_recarga = parseFloat(document.querySelector("#valor_inpt").value);

    // Verifica se o valor de recarga é vazio ou não é um número válido
    if (isNaN(valor_recarga) || valor_recarga <= 0) {
        alert("Por favor, insira um valor válido para a recarga.");
        return; // Sai da função se o valor não for válido
    }

    let saldoAtualizar = saldoNumerico + valor_recarga;

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
        alert("Recarga Realizada com Sucesso");
        window.location.reload(true);
    })
    .catch(error => {
        console.error(error); // Lida com erros
    });
});
