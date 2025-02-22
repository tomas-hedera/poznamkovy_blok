<?php
// Nastavení připojení k databázi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poznamkovy_blok";

//vytvorení připojení k databázi
$db = new mysqli($servername, $username, $password, $dbname);


// Kontrola připojení
if($db->connect_error)
{
        die("Chyba při připojení k databázi: " . $db->connect_error);
}
?>