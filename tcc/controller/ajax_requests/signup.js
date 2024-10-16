const form = document.getElementById('create-account-form');
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
            if (data.success === true) {
                // Redireciona para a página de login se a inserção for bem-sucedida
                window.location.href = 'login.php'; // Substitua pelo caminho da sua página de login
          }
        })
        .catch(error => console.error('Erro:', error));
});
