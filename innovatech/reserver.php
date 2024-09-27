<?php

session_start();

$materielID = $_POST['materiel'];

include "./db/connect.php";

unset($_SESSION['success_reservation']);
unset($_SESSION['error_reservation']);

$sql_reservation = "INSERT INTO emprunt (materiel_id, utilisateur_id, date_emprunt) VALUES (:materiel_id, :utilisateur_id, :date_emprunt)";

$stmt = $pdo->prepare($sql_reservation);

try {
    $stmt->execute(['materiel_id' => $materielID, 'utilisateur_id' => $_SESSION['id'], 'date_emprunt' => date("Y-m-d H:i:s")]);
}
catch (Exception $e) {
    $_SESSION['error_reservation'] = true;
    header('Location: /pages/categories.php');
    exit;
}


$sql_quantite = "UPDATE materiel
SET quantite = quantite - 1
WHERE id = :materiel_id";

$stmt = $pdo->prepare($sql_quantite);
$stmt->execute(['materiel_id' => $materielID]);

$_SESSION['success_reservation'] = true;

header('Location: /pages/categories.php');
