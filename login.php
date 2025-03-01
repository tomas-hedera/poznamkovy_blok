<?php
session_start();
require_once 'db.php';


//prihlašeni  uživatele
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = trim($_POST['username']);
        $password = $_POST['password'];
      
        // // Připravený SQL dotaz pro získání uživatele z databáze
        $dotaz = $pdo->prepare("SELECT id, password FROM users WHERE username = :username");
        $dotaz->execute(['username' => $username]);
        $user = $dotaz->fetch();

         // Ověření hesla pomocí password_verif

         if($user && password_verify($password, $user['password']))
         {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $username;
                
                header("Location: nodes.php");
                exit();
         }else
         {
                echo "Neplatné přihlašovací udaje";
                header("Location: index.php");
         }
}

?>