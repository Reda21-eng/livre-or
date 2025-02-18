<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Sécurisation du mot de passe
    $sql = "INSERT INTO user (login, password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$login, $password]);
    echo "Inscription réussie ! <a href='connexion.php'>Se connecter</a>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Livre d'Or</title>
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
        <h1>Inscription</h1>
        <form method="POST">
            <label for="login">Login :</label>
            <input type="text" name="login" id="login" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">S'inscrire</button>
        </form>
    </main>
</body>
</html>
