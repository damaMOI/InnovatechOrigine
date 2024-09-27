<?php
session_start();

$title = "Connexion"; ?>

<?php include "layouts/header.php"; ?>

<div class="cbo-login">
    <h2>Connexion</h2>
    <div class="form-wrapper">

        <form action="login.php" method="POST" class="login-form">
            <?php if (isset($_SESSION['error_login']) &&  $_SESSION['error_login'] == true) : ?>
                <p class="form-error">La connexion a échoué avec succès.</p>
            <?php endif; ?>

            <div class="form-field">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-field">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="button-wrapper">
                <button class="button-submit" type="submit">Se connecter</button>
            </div>
        </form>
    </div>

</div>
