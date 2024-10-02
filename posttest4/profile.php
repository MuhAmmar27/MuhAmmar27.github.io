<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest4 | Profil Pengguna</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <header>
        <h1>Profil Pengguna</h1>
        <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <nav id="navbar">
        <a href="logged.php">Beranda</a>
        <a href="logged-about.php">Tentang</a>
        <a href="profile.php">Profil</a>
    </nav>

    <nav class="menu" id="menu">
        <a href="logged.php">Beranda</a>
        <a href="logged-about.php">Tentang</a>
        <a href="profile.php">Profil</a>
    </nav>

    </header>

    <main>
        <div class="profile-container">
            <form class="profile-form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="admin" readonly>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" value="Tara" readonly>
                        <span class="toggle-password" onclick="togglePasswordVisibility()">
                            👁️
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="admin@yaha.com" readonly>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Semua Hak Dilindungi</p>
    </footer>

    <script src="profile.js"></script>
</body>
</html>
