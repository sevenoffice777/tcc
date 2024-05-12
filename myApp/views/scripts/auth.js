window.onload = () => {
    if(localStorage.getItem("loginAuth") && localStorage.getItem("loginAuth") == 'accessGranted') {
        window.location.href = "./views/inicio.php";
    } else {
        setTimeout(()=>{
            toggleClass(document.querySelector("#load-iniciar"),"display-none")
            toggleClass(document.querySelector("#btn-iniciar"), "display-none")
        }, 3000)
    }
}

let btn_iniciar = document.querySelector("#btn-iniciar");

btn_iniciar.onclick = () => {
    // window.location.href = "./views/login.php";
    alert("Hello")
}