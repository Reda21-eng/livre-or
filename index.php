<?php
include './assets/bdd/db.php';
session_start();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Livre d'Or</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./assets/pages/livre-or.php">Livre d'Or</a></li>
                <?php
                if(isset($_SESSION['user'])) {
                    echo("<li><form method='post' action=''><button name='deconnexion' type='submit'>déconnexion</button></form></li>");
                } else {
                    echo("
                    <li><a href='./assets/pages/inscription.php'>S'inscrire</a></li>
                    <li><a href='./assets/pages/connexion.php'>Se connecter</a></li>
                    ");
                }
                ?>

            </ul>
        </nav>
    </header>

    <main>
        <h1>Bienvenue sur notre Livre d'Or</h1>
        <p>Partagez vos commentaires et découvrez ceux des autres.</p>

        <div class="image-container">
        <img src="790bc57c-068a-40bb-bad4-01d0b11214db.jpg" alt="image mariés">
        <img src="99bc6b77-b7eb-4fae-b73c-b862dd862e1e.jpg" alt="image rose bague">
        </div>
    </main>
</body>
</html>
