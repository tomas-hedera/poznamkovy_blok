<?php
include 'db.php';



?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nodes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Poznámky</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Poznámkový blok</h1>
            <div class="user-panel">
                <span>Přihlášen: Uživatel</span>
                <button class="odhlasit">Odhlásit</button>
            </div>

            <div class="user-panel-mobile">
                <button name><i class="fa-solid fa-user"></i></button>
                <button name="hamburger"><i class="fa-solid fa-bars"></i></button>
            </div>

        </header>

        <nav>
            <ul>
                <li><a href="#" id="add-note-btn"><i class="fa-solid fa-clipboard"></i> Přidat poznámku</a></li>
                <li><a href="#"><i class="fa-solid fa-star"></i> Oblíbené</a></li>
                <li><a href="#"><i class="fa-solid fa-gear"></i> Nastavení</a></li>
            </ul>
        </nav>

        <main id="main-content">
            <div class="note" >
                <input type="text" name="note-title" id="note-title" value="Název poznámky"><br>
                <textarea name="note-content" rows="5" cols="40">Obsah poznámky</textarea><br>
                <button class="edit">Upravit</button>
                <button class="delete">Odtranit</button>
            </div>
        </main>
        <footer>
            <p>© 2025 Poznámkový blok</p>
        </footer>
    </div>
    <script src="script.js"></script>
</body>

</html>