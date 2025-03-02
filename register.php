<?php
include "db.php"; // Zahrnutí souboru pro připojení k databázi

//TLACITKO ZPĚT NA ÚVODNÍ OBRAZOVKU
if(array_key_exists("zpet", $_POST)) {
        header("Location: index.php");
        exit();
    }


// REGISTRACE UŽIVATELE
if(isset($_POST["registrovat"]))
{
        $jmeno = $_POST["username-register"];
        $heslo = $_POST["password-register"];

        $hashed_heslo = password_hash($heslo, PASSWORD_DEFAULT);
        $hlaska = "";

        try
        {
                $dotaz = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :jmeno");
                $dotaz->execute(["jmeno" => $jmeno]);
                $pocet = $dotaz->fetchColumn();
                //var_dump($pocet);

                if($pocet == 0 )
                {
                        $dotaz = $pdo->prepare("INSERT INTO users(username, password) VALUES(:jmeno, :heslo)");
                        $dotaz->execute(["jmeno"=>$jmeno, "heslo"=>$hashed_heslo]);
                        $hlaska = "Uživatel byl uspěšně registrován";
                }
                else
                {
                        $hlaska = "Uživatel s tímto jménem už existuje";
                }
        }
        catch(PDOException $e)
        {
                echo "chyba při registraci:" .$e->getMessage();
        }
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Registrace</title>
</head>
<body>
       
        <form method="post">
        <button name="zpet">Zpět na uvodní obrazovku</button>
        </form>

        <div class="hlaska"><?php if($hlaska) {echo $hlaska;}?>
        </div>





        <script>
             let hlaska = "<?php echo $hlaska; ?>";
        if(hlaska)
        {
                let hlaskaDiv = document.querySelector(".hlaska");
                hlaskaDiv.style.display = "block";
        }
        </script>
      
</body>
</html>