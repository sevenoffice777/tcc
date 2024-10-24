const cota_valor_passe = 2.5;
let pos = false;
let isGetData = false
let valor_em_passe;
let valor_em_reais;

document.querySelector("#reverse_icon").addEventListener("click", ()=> {
    if(isGetData == false) {
        valor_em_reais = parseFloat(document.querySelector("#saldo_log").textContent.replace("R$", "").replace(",", ".").trim());
        valor_em_passe = parseInt(valor_em_reais/cota_valor_passe);
        isGetData = true;
    }
    
    
    if(pos == false) {
        document.querySelector("#saldo_log").textContent = `${valor_em_passe} Passes`;
        pos = true;
    } else {
        document.querySelector("#saldo_log").textContent = `R$ ${valor_em_reais} `;
        pos = false;
    }

})