
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "InnovaTech" ?></title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap">
</head>
<body>
    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) : ?>
    <header>
        <span class="username">Welcome <?= $_SESSION['username'] ?></span>

        <nav class="nav-categories">
            <a href="/pages/cables.php" class="categorie-link">
                Cables
            </a>
            <a href="/pages/ordinateurs.php" class="categorie-link">
                Ordinateurs
            </a>
            <a href="/pages/mydil.php" class="categorie-link">
                MyDil
            </a>
        </nav>
    </header>
<?php endif; ?>
