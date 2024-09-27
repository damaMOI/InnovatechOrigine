<?php
session_start();

include "db/connect.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, nom, email FROM utilisateurs WHERE email = :email AND mot_de_passe = :pass";


    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email, 'pass' => $password]);

    // Fetch all results as an array of objects
    $user = $stmt->fetch();

    $_SESSION['error_false'] = false;

    if(!$user) {
        $_SESSION['error_login'] = true;
        header('Location: /index.php');
        exit;
    }

    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $user->id;
    $_SESSION['username'] = $user->nom;

    header('Location: /pages/categories.php');
}
?>
