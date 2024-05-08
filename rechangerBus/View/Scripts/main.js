let container = document.querySelector(".container")
let log = document.querySelector(".log");
let img_loading = document.querySelector("#load_img");
let button_start = document.querySelector("#btn_iniciar");

window.addEventListener("load", () => {
    setTimeout(() => {
        toggleClass(img_loading, "display_none");
        toggleClass(button_start, "display_none");
    }, 3000)

})

button_start.addEventListener("click", ()=>{
    toggleClass(log, "display_none");
    // Desaparece o log de carregamento

    toggleClass(document.querySelector(".nav-contain"), "display_none");

})
    

function toggleClass(classVerify, classAlter) {
    if (classVerify.classList.contains(classAlter)) {
        classVerify.classList.remove(classAlter);
    } else {
        classVerify.classList.add(classAlter);
    }
}