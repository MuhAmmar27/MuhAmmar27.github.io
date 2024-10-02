document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message');

    if (username === 'admin' && password === 'Tara' && email === 'admin@yaha.com') {
        message.textContent = 'Login Berhasil!';
        message.style.color = 'green';
        setTimeout(() => {
            window.location.href = 'logged.php'; 
        }, 700);
    } else {
        message.textContent = 'Salah satu input salah!';
        message.style.color = 'red';
    }
});
