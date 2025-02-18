<?php 
include_once '../bdd/db.php'; // Assurez-vous que db.php définit correctement $pdo
session_start();
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5;
$offset = ($page - 1) * $limit;

// Vérification de la connexion PDO
if (!isset($pdo)) {
    die("Erreur de connexion à la base de données.");
}

// Récupération du nombre total de commentaires
$stmt = $pdo->prepare("SELECT COUNT(*) FROM comment");
$stmt->execute();
$total_comments = $stmt->fetchColumn();
$total_pages = ceil($total_comments / $limit);

// Récupération des commentaires avec correction des paramètres
$stmt = $pdo->prepare("SELECT * FROM comment ORDER BY date DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
$stmt->execute();
$comments = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'Or</title>
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
        <h1>Livre d'Or</h1>
        <?php foreach ($comments as $comment): ?>
            <div class="comment">
                <p><strong>Posté le <?php echo date("d/m/Y", strtotime($comment['date'])); ?> par l'utilisateur <?php echo htmlspecialchars($comment['id_user']); ?></strong></p>
                <p><?php echo htmlspecialchars($comment['comment']); ?></p>
            </div>
        <?php endforeach; ?>

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="commentaire.php">Ajouter un commentaire</a>
        <?php endif; ?>

        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page - 1; ?>">Précédent</a>
            <?php else: ?>
                <span>Précédent</span>
            <?php endif; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?php echo $page + 1; ?>">Suivant</a>
            <?php else: ?>
                <span>Suivant</span>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>
