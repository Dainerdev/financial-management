
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); 

        const id = document.getElementById('id').value;
        const typeId = document.getElementById('type').value;
        const namea = document.getElementById('namea').value;
        const nameb = document.getElementById('nameb').value;
        const lname = document.getElementById('lname').value;
        const email = document.getElementById('email').value;
        const pass = document.getElementById('pass').value;
        const age = document.getElementById('age').value;

        if (pass !== pass2) {
            alert('Las contraseñas no coinciden. Por favor, intenta de nuevo.');
            return;
        }

        alert(`Formulario enviado:\nNombre: ${nombre}\nEmail: ${email}`);

        form.submit();
    });
});