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