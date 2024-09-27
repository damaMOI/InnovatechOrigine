<?php
session_start();

if ($_SESSION['loggedin']) :

    $title = "Catégories"; ?>

    <?php include "../layouts/header.php"; ?>

    <?php if (isset($_SESSION['success_reservation']) && $_SESSION['success_reservation']): ?>
        <h1 class="reservation-success">Votre réservation a bien été prise en compte</h1>
    <?php endif; ?>
    <?php if (isset($_SESSION['error_reservation']) && $_SESSION['error_reservation'] === true) : ?>
        <h3 class="reservation-error">Vous avez déjà loué ce matériel.</h3>
    <?php endif; ?>

    <img src="../assets/images/background.jpg" class="dashboard" />

    <?php include '../layouts/footer.php'; ?>

<?php else : ?>
    <h1>Nope</h1>
<?php endif; ?>
