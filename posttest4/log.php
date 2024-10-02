<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Perpustakaan Digital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Login ke Perpustakaan Digital</h1>
</header>

<main>
    <form id="loginForm">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" required>
        </div>
        <button type="submit">Login</button>
        <p id="message" class="message"></p>
    </form>
</main>

<footer>
    <p>&copy; 2024 Semua Hak Dilindungi</p>
</footer>

<script src="script.js"></script>

</body>
</html>
