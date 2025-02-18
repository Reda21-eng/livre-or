<?php
session_start();
include '../bdd/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: connexion.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];
    $user_id = $_SESSION['user_id'];
    $date = date("Y-m-d H:i:s");

    $stmt = $pdo->prepare("INSERT INTO comment (comment, id_user, date) VALUES (?, ?, ?)");
    $stmt->execute([$comment, $user_id, $date]);
    header("Location: livre-or.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un commentaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="livre-or.php">Livre d'Or</a></li>
                <?php
                if(isset($_SESSION['user'])) {
                    echo("<li><form method='post' action='deconnexion.php'><button name='deconnexion' type='submit'>déconnexion</button></form></li>");
                } else {
                    echo("
                    <li><a href='inscription.php'>S'inscrire</a></li>
                    <li><a href='connexion.php'>Se connecter</a></li>
                    ");
                }
                ?>

             
            </ul>
        </nav>
    </header>

    <main>
        <h1>Ajouter un commentaire</h1>
        <form method="POST">
            <label for="comment">Votre commentaire :</label>
            <textarea name="comment" id="comment" required></textarea>

            <button type="submit">Ajouter</button>
        </form>
    </main>
</body>
</html>
