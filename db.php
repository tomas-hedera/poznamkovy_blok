<?php
// Nastavení připojení k databázi
$host = "localhost";
$dbname = "poznamkovy_blok";
$username = "root";
$password = "";

try
{
        //vytvorení připojení k databázi
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

        // Nastavení chybového režimu: vyhazování výjimek při chybách
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
        // Pokud dojde k chybě, vypíšeme chybovou zprávu a ukončíme skript
        die("Chyba při připjení k databazi" . $e->getMessage());
}




?>