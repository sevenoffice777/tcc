const form = document.getElementById('create-account-form');
const endpoint = form.getAttribute('dataForm');

form.addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch(endpoint, {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        console.log(data.data)
    })
    .catch(error => console.error('Erro:', error));
});
