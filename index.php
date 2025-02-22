<!DOCTYPE html>
<html lang="cs">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Poznamkový blok</title>
</head>

<body>


        <!-- Hlavní kontejner -->
        <div class="container">
                <h1>Poznámkový blok</h1>
                <!-- Tlačítka pro zobrazení formulářů -->
                <div class="buttons" id="buttons">
                        <button class="btn" onclick="showForm('register')">Registrace</button>
                        <button class="btn" onclick="showForm('login')">Přihlášení</button>

                </div>

                <!-- Registrační formulář -->
                <div id="registerForm" class="form-container">
                        <button id="krizek-register">X</button>
                        <h2>Registrace</h2>
                        <form action="register.php" method="post">
                                <input type="text" name="username" id="username" required placeholder="Uživatelské jméno">
                                <br>

                                <input type="password" name="password" id="password" required placeholder="Heslo">
                                <br>
                                <button type="submit">Registrovat</button>
                        </form>
                </div>
                <!-- Přihlašovací formulář -->
                <div id="loginForm" class="form-container">
                        <button id="krizek-login">X</button>
                        <h2>Přihlašení</h2>
                        <form action="login.php" method="post">
                                <input type="text" name="username" id="username" required placeholder="Uživatelské jméno">
                                <br>
                                <input type="password" name="password" id="password" required placeholder="Heslo">
                                <br>
                                <button type="submit">Přihlásit se</button>
                        </form>
                </div>

                <!-- Načtení JavaScript souboru -->
                <script src="script.js"></script>
</body>

</html>