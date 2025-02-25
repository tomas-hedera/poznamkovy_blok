<?php
session_start();
include 'db.php';


//prihlašeni  uživatele
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        session_unset();
        // // Připravený SQL dotaz pro získání uživatele z databáze
        $dotaz = $db->prepare("SELECT id, password FROM users WHERE username = ?");
        $dotaz->execute([$username]);
        $user = $dotaz->fetch();

         // Ověření hesla pomocí password_verif

         if($user && password_verify($password, $user['password']))
         {
                $_SESSION['user_id'] = $user['id'];
                
                header("Location: nodes.php");
                exit();
         }else
         {
                echo "Neplatné přihlašovací udaje";
                header("Location: index.php");
         }
}

?>