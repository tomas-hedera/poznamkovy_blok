<?php
include "db.php"; // Zahrnutí souboru pro připojení k databázi


// REGISTRACE UŽIVATELE
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ošetření vstupů
    $username = htmlspecialchars(trim($_POST["username-register"]));
    $password = htmlspecialchars(trim($_POST["password-register"]));

    // Hashování hesla
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL dotaz pro vložení uživatele do databáze
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);

    // Spuštění dotazu a kontrola úspěšnosti
    if ($stmt->execute(['username' => $username, 'password' => $hashed_password])) {
        echo "<h1>Registrace proběhla úspěšně</h1>";
        header("Location: ?");
        exit();
        
    } else {
        echo "Chyba při registraci: " . $stmt->errorInfo()[2];
    }
    
}


//TLACITKO ZPĚT
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrace</title>
</head>
<body>
      <button name="zpet">Zpět na uvodní obrazovku</button>
</body>
</html>