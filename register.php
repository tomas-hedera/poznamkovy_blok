<?php
include "db.php"; // Zahrnutí souboru pro připojení k databázi

if($_SERVER["REQUEST_METHOD"] == "POST"){
// Ošetření vstupů
$username = htmlspecialchars(mysqli_real_escape_string($db, $_POST["username"]));   
$password = htmlspecialchars(mysqli_real_escape_string($db, $_POST["password"]));

// Hashování hesla
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL dotaz pro vložení uživatele do databáze
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

// Spuštění dotazu a kontrola úspěšnosti
if($db->query($sql) === TRUE){
        echo "Registrace proběhla úspěšně";
}
else{
        echo "Chyba při registraci: " . $db->error;
}


// Uzavření připojení k databázi
$db->close();

}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrace</title>
</head>
<body>
      
</body>
</html>