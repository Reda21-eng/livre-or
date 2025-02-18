<?php include '../bdd/db.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Livre d'Or</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="livre-or.php">Livre d'Or</a></li>
                <li><a href="./authentification/inscription.php'">S'inscrire</a></li>
                <li><a href="='../authentification/connexion.php'">Se connecter</a></li>
                <?php
                if(isset($_SESSION['user'])) {
                    echo("<li><form method='post' action='deconnexion.php'><button name='deconnexion' type='submit'>déconnexion</button></form></li>");
                } else {
                    echo("
                    <li><a href=../authentification/inscription.php'>S'inscrire</a></li>
                    <li><a href='../authentification/connexion.php'>Se connecter</a></li>
                    ");
                }
                ?>

            </ul>
        </nav>
    </header>

    <main>
        <h1>Bienvenue sur notre Livre d'Or</h1>
        <p>Partagez vos commentaires et découvrez ceux des autres.</p>
        <img src="M3.gif" alt="gif mariés">
    </main>
</body>
</html>
