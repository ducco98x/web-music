function login() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    fetch('/server/login.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ username, password })
    })
    .then(response => response.json())
    .then(data => alert(data.message));
}

function showRegister() {
    document.getElementById('register-form').style.display = 'block';
}