<?php
session_start();

if ($_SESSION['loggedin']) :

    include "../db/connect.php";

    $sql = "SELECT materiel.* FROM materiel LEFT JOIN categorie ON materiel.categorie_id = categorie.id WHERE categorie.nom = :nom";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nom' => 'cables']);

    $materiels = $stmt->fetchAll();

    $title = "Cables"; ?>

    <?php include "../layouts/header.php"; ?>

    <?php include "../partials/materiel.php"; ?>


    <?php include '../layouts/footer.php'; ?>

<?php else : ?>
    <h1>Nope</h1>
<?php endif; ?>
