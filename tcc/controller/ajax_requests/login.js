const form = document.getElementById('verify-account-form');
const endpoint = form.getAttribute('dataForm');

form.addEventListener('submit', function (event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch(endpoint, {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Redireciona para a página principal ou dashboard
                window.location.href = './rechangerBus_main/main_page.php'; // Substitua pela sua página principal
            } else {
                alert("Usuario ou senha incorretos!")
            }
        })
        .catch(error => console.error('Erro:', error));
});
