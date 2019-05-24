<?php

session_start();

$login = '';
$password = '';

if (isset($_POST['login']) && isset($_POST['pass']) ) {

    $login = $_POST['login'];
    $password = $_POST['pass'];

     $user = getUser($login);

     if ($user) {
         if (password_verify($password,$user['pass'])) {
             $_SESSION['auth'] = true;
             $_SESSION['user_name'] = $user['login'];
			
            header('Location: ../index.php');
            die;

         }
         else {
             $_SESSION['auth'] = false;
         }
     }
}