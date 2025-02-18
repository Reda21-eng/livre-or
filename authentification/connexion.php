<?php include 'db.php'; ?>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $stmt = $pdo->prepare("SELECT * FROM user WHERE login = ?");
    $stmt->execute([$login]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header("Location: livre-or.php");
    } else {
        echo "Identifiants incorrects.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Livre d'Or</title>
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
        <h1>Connexion</h1>
        <form method="POST">
            <label for="login">Login :</label>
            <input type="text" name="login" id="login" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Se connecter</button>
        </form>
    </main>
</body>
</html>
